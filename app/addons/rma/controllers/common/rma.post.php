<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Settings;
use Tygh\Registry;
use Tygh\Navigation\LastView;
use Tygh\Enum\Addons\Rma\ReturnOperationStatuses;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

/* POST data processing */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'add_return') {

        if (!empty($_REQUEST['returns'])) {
            $order_id = (int) $_REQUEST['order_id'];
            $returns = (array) $_REQUEST['returns'];
            $action = $_REQUEST['action'] ? $_REQUEST['action'] : 1;
            $comment = $_REQUEST['comment'];
            $policy_confirmation = $_REQUEST['policy_confirmation'];

            $order_info = fn_get_order_info($order_id);

            if (empty($order_info)) {
                return array(CONTROLLER_STATUS_NO_PAGE);
            } else if($policy_confirmation !== 'Y') {
                fn_set_notification('E', __('error'), __("rma_proof.policy_not_accepted"));
                return array(CONTROLLER_STATUS_OK, 'rma.create_return&order_id=' . $order_id);
            }

            $user_id = (int) $order_info['user_id'];
            $order_lang_code = $order_info['lang_code'];

            if (AREA != 'A' && !fn_is_order_allowed($order_id, $auth)) {
                return array(CONTROLLER_STATUS_DENIED);
            }

            $total_amount = 0;
            foreach ($returns as $k => $v) {
                if (isset($v['chosen']) && $v['chosen'] == 'Y') {
                    $total_amount += $v['amount'];
                }
            }

            $_data = array(
                'order_id' => $order_id,
                'user_id' => $user_id,
                'action' => $action,
                'timestamp' => TIME,
                'status' => ReturnOperationStatuses::REQUESTED,
                'total_amount' => $total_amount,
                'policy_confirmation' => $policy_confirmation,
                'comment' => $comment
            );

            $return_id = db_query('INSERT INTO ?:rma_returns ?e', $_data);

            //sprint_4_rma_proof: START
            $proof_dir = Registry::get('config.dir.files') . "rma_proof/";
            $file_list = upload_proof_images($return_id, $proof_dir, $_FILES["file_ty-rma-proof__image_var"]);
            if($file_list === false) {
                db_query('DELETE FROM ?:rma_returns WHERE return_id = ?i', $return_id);
                return array(CONTROLLER_STATUS_OK, 'rma.create_return&order_id=' . $order_id);
            }
            if((count($file_list) > 0) && (db_query('INSERT INTO ?:rma_proof ?m', $file_list) < 1)) {
                fn_set_notification('E', __('error'), __("rma_proof.internal_error"));
                return array(CONTROLLER_STATUS_OK, 'rma.create_return&order_id=' . $order_id);
            }
            //sprint_4_rma_proof: END

            $order_items = db_get_hash_array("SELECT item_id, order_id, extra, price, amount FROM ?:order_details WHERE order_id = ?i", 'item_id', $order_id);
            foreach ($returns as $item_id => $v) {
                if (isset($v['chosen']) && $v['chosen'] == 'Y') {
                    if (true == fn_rma_declined_product_correction($order_id, $k, $v['available_amount'], $v['amount'])) {
                        $_item = $order_items[$item_id];
                        $extra = @unserialize($_item['extra']);
                        $_data = array (
                            'return_id' => $return_id,
                            'item_id' => $item_id,
                            'product_id' => $v['product_id'],
                            'reason' => !empty($v['reason']) ? $v['reason'] : '',
                            'amount' => $v['amount'],
                            'product_options' => !empty($extra['product_options_value']) ? serialize($extra['product_options_value']) : '',
                            'price' => fn_format_price((((!isset($extra['exclude_from_calculate'])) ? $_item['price'] : 0) * $_item['amount']) / $_item['amount']),
                            'product' => !empty($extra['product']) ? $extra['product'] : fn_get_product_name($v['product_id'], $order_lang_code)
                        );

                        db_query('INSERT INTO ?:rma_return_products ?e', $_data);

                        if (!isset($extra['returns'])) {
                            $extra['returns'] = array();
                        }
                        $extra['returns'][$return_id] = array(
                            'amount' => $v['amount'],
                            'status' => ReturnOperationStatuses::REQUESTED
                        );
                        db_query('UPDATE ?:order_details SET ?u WHERE item_id = ?i AND order_id = ?i', array('extra' => serialize($extra)), $item_id, $order_id);
                    }
                }
            }

            //Send mail
            $return_info = fn_get_return_info($return_id);
            $order_info = fn_get_order_info($order_id);
            fn_send_return_mail($return_info, $order_info, array('C' => true, 'A' => true, 'S' => true));
        }

        return array(CONTROLLER_STATUS_OK, 'rma.details?return_id=' . $return_id);
    }
}

if (empty($auth['user_id']) && !isset($auth['order_ids']) && AREA == 'C') {
    return array(CONTROLLER_STATUS_REDIRECT, 'auth.login_form?return_url=' . urlencode(Registry::get('config.current_url')));
}

if ($mode == 'details' && !empty($_REQUEST['return_id'])) {
    $return_id = intval($_REQUEST['return_id']);

    // [Breadcrumbs]
    if (AREA != 'A') {
        fn_add_breadcrumb(__('return_requests'), "rma.returns");
        fn_add_breadcrumb(__('return_info'));
    }
    // [/Breadcrumbs]

    Registry::set('navigation.tabs', array (
        'return_products' => array (
            'title' => __('return_products_information'),
            'js' => true
        ),
        'declined_products' => array (
            'title' => __('declined_products_information'),
            'js' => true
        ),
    ));

    $return_info = fn_get_return_info($return_id);

    if ((AREA == 'C') && (empty($return_info) || $return_info['user_id'] != $auth['user_id'] || !fn_is_order_allowed($return_info['order_id'], $auth))) {
        return array(CONTROLLER_STATUS_DENIED);
    }
    //sprint_4_rma_proof: START
    Registry::set('navigation.tabs.proof', array(
        'title' => __('proof'),
        'js' => true
    ));
    //sprint_4_rma_proof: END
    if (AREA == 'A') {
        Registry::set('navigation.tabs.comments', array (
            'title' => __('comments'),
            'js' => true
        ));
        Registry::set('navigation.tabs.actions', array (
            'title' => __('actions'),
            'js' => true
        ));

        Tygh::$app['view']->assign('is_refund', fn_is_refund_action($return_info['action']));
        Tygh::$app['view']->assign('order_info', fn_get_order_info($return_info['order_id']));
    }
    $return_info['extra'] = !empty($return_info['extra']) ? unserialize($return_info['extra']) : array();
    if (!is_array($return_info['extra'])) {
        $return_info['extra'] = array();
    }

    Tygh::$app['view']->assign('reasons', fn_get_rma_properties( RMA_REASON ));
    Tygh::$app['view']->assign('actions', fn_get_rma_properties( RMA_ACTION ));
    Tygh::$app['view']->assign('return_info', $return_info);

} elseif ($mode == 'print_slip' && !empty($_REQUEST['return_id'])) {

    echo(fn_rma_print_packing_slips($_REQUEST['return_id'], $auth));
    exit;

} elseif ($mode == 'returns') {

    // [Breadcrumbs]
    if (AREA != 'A') {
        fn_add_breadcrumb(__('return_requests'));
    }
    // [/Breadcrumbs]

    $params = $_REQUEST;
    if (AREA == 'C') {
        $params['user_id'] = $auth['user_id'];

        if (empty($params['user_id']) && !empty($auth['order_ids'])) {
            $params['order_ids'] = $auth['order_ids'];
        }

        if (!empty($params['order_ids']) && !empty($params['order_id']) && !fn_is_order_allowed($params['order_id'], $auth)) {
            unset($params['order_id']);
        }
    }

    list($return_requests, $search) = fn_rma_get_returns($params, Registry::get('settings.Appearance.' . (AREA == 'A' ? 'admin_' : '') . 'elements_per_page'));
    Tygh::$app['view']->assign('return_requests', $return_requests);
    Tygh::$app['view']->assign('search', $search);

    fn_rma_generate_sections('requests');

    Tygh::$app['view']->assign('actions', fn_get_rma_properties(RMA_ACTION));

} elseif ($mode == 'create_return' && !empty($_REQUEST['order_id'])) {
    $order_id = intval($_REQUEST['order_id']);

    // [Breadcrumbs]
    if (AREA != 'A') {
        fn_add_breadcrumb(__('order').' #'.$order_id, "orders.details?order_id=$order_id");
        fn_add_breadcrumb(__('return_registration'));
    }
    // [/Breadcrumbs]

    $order_info = fn_get_order_info($order_id);
    $order_returnable_products = fn_get_order_returnable_products($order_info['products'], $order_info['products_delivery_date']);
    $order_info['products'] = $order_returnable_products['items'];

    if (!isset($order_info['allow_return'])) {
        return array(CONTROLLER_STATUS_DENIED);
    }

    if (AREA != 'A' && !fn_is_order_allowed($order_id, $auth)) {
        return array(CONTROLLER_STATUS_DENIED);
    }

    Tygh::$app['view']->assign('order_info', $order_info);
    Tygh::$app['view']->assign('reasons', fn_get_rma_properties( RMA_REASON ));
    Tygh::$app['view']->assign('actions', fn_get_rma_properties( RMA_ACTION ));
} elseif ($mode == 'proof') {// sprint_4_rma_proof: START
    if(!isset($_REQUEST['return_id']) || !isset($_REQUEST['file_name'])) {
        return fn_redirect('rma.returns');
    }

    $return_id = intval($_REQUEST['return_id']);
    $file_name = $_REQUEST["file_name"];// TODO: sanitize this

    $file_path = db_get_field("SELECT path FROM ?:rma_proof WHERE name = ?s", $file_name);
    if(empty($file_path)) {
        return fn_redirect('rma.returns');
    }
    $file_path = sprintf('%srma_proof/%d/%s', Registry::get('config.dir.files'), $return_id, $file_path);
    $mime_type = mime_content_type($file_path);
    $file_size = filesize($file_path);
    header('Content-Type: ' . $mime_type);
    header('Content-Length: ' . $file_size);

    readfile($file_path);
}// sprint_4_rma_proof: END


/** sprint_4_rma_proof: START
* 1. create upload dir structure("var/files/rma_proof/return_id/")
* 2. verify max size, min size, mime type
* 3. copy file to upload dir
* 4. resize if larger than limits
*/
function upload_proof_images($return_id, $upload_path, $images) {
    define("PROOF_MIN_SIZE", Settings::instance()->getValue('minimum_proof_file_size', 'rma'));// 100 KB
    define("PROOF_MAX_SIZE", Settings::instance()->getValue('maximum_proof_file_size', 'rma'));// 7.5 MB

    define("PROOF_MAX_UPLOAD_COUNT", 5);

    foreach($images['tmp_name'] as $idx => $file) {
        if(!empty($file)) {
            continue;
        }
        unset($images['tmp_name'][$idx]);
    }
    if(count($images['tmp_name']) > PROOF_MAX_UPLOAD_COUNT) {
        fn_set_notification('E', __('error'), __("rma_proof.upload_count_exceeded"));
        return false;
    }
    if(!setup_proof_images_environment($upload_path, $return_id)) {
        fn_set_notification('E', __('error'), __("rma_proof.internal_error"));
        return false;
    }

    $ALLOWED_TYPES = ["image/png", "image/jpg", "image/jpeg"];
    $uploaded_file_list = [];

    foreach($images['tmp_name'] as $idx => $file) {
        $file_size = floor(filesize($file) / 1024);
        if($file_size > PROOF_MAX_SIZE) {
            fn_set_notification('E', __('error'), __("rma_proof.max_size_exceeded"));
            return false;
        } else if ($file_size < PROOF_MIN_SIZE) {
            fn_set_notification('E', __('error'), __("rma_proof.below_min_size"));
            return false;
        }

        $image_info = getimagesize($file);
        if(!in_array($image_info['mime'], $ALLOWED_TYPES)) {
            fn_set_notification('E', __('error'), __("rma_proof.invalid_file_format"));
            return false;
        }

        $ext_parts = explode(".", $images['name'][$idx]);
        $ext = end($ext_parts);
        $file_name_db = fn_crc32(microtime() . $ext);
        $file_name = fn_crc32(microtime());
        $file_path = sprintf("%s/%d/%s.%s", $upload_path, $return_id, $file_name, $ext);
        if(!move_uploaded_file($file, $file_path)) {
            fn_set_notification('E', __('error'), __("rma.internal_error"));
            return false;
        }

        $image_info = getimagesize($file_path);
        if($image_info[0] > 1500 || $image_info[1] > 1500) {
            $img = new Imagick($file_path);
            if (!$img->adaptiveResizeImage(1500, 1500, true)) {
                fn_set_notification('E', __('error'), __("rma.internal_error"));
                return false;
            }
            unlink($file_path);
            if(!$img->writeImage($file_path)) {
                fn_set_notification('E', __('error'), __("rma.internal_error"));
                return false;
            }
        }

        $uploaded_file_list[] = [
            "return_id" => $return_id,
            "name" => $file_name_db,
            "path" => $file_name . "." . $ext,
            "timestamp" => time(),
        ];
    }

    return $uploaded_file_list;
}

function setup_proof_images_environment($dir, $return_id) {
    $path = "$dir$return_id";
    if(!stat($dir) || !stat($path)) {
        return mkdir($path, 0770, true);
    }
    return true;
}
// sprint_4_rma_proof: END