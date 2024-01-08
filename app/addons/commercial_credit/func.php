<?php

use Tygh\Tygh;

//GET: insert input at a certain position
function fn_commercial_credit_get_status_params_definition(&$status_params, $type)
{
	if($type === STATUSES_ORDER) {
		$pos = array_search('inventory', array_keys($status_params));
		$part1 = array_slice($status_params, 0, $pos);
		$part1['commercial_credit'] = [
            'type' => 'select',
            'label' => 'commercial_credit',
            'variants' => [
                'I' => 'increase',
                'D' => 'decrease',
            ],
		];
		$status_params = $part1 + array_slice($status_params, $pos);
	}
}

function fn_commercial_credit_test_profile_update_user_pre($request)
{
    if(empty($_REQUEST['addons'])) {
        return;
    }

    $_REQUEST['user_data'] = array_merge($_REQUEST['user_data'], $_REQUEST['addons']);

    if($_REQUEST['addons']['commercial_credit_enabled']) {
    // error checking user input
        if(!in_array($_REQUEST['addons']['commercial_credit_enabled'], ['A', 'D'])) {
            $_REQUEST['user_data']['commercial_credit_enabled'] = 'A';
        }
        if($_REQUEST['addons']['commercial_credit_limit'] <= 0) {
            $_REQUEST['user_data']['commercial_credit_limit'] = 0.00;
        }
    }
}

//GET: add commercial credit value to customer list template
function fn_commercial_credit_get_users($params, &$fields, &$sortings, $condition, $join, $auth)
{
    $fields['credit_enabled'] = '?:users.commercial_credit_enabled';
    $fields['credit_limit'] = '?:users.commercial_credit_limit';
    $fields['credit'] = '?:users.commercial_credit';

    $sortings['credit'] = '?:users.commercial_credit';
}

function fn_commercial_credit_change_order_status_post($order_id, $status_to, $status_from, $force_notification, $place_order, $order_info, $edp_data)
{
    $res = modify_commercial_credit($order_info['user_id'], $order_info['total'], $status_from, $status_to);
    if($res[0] === false) {
        fn_set_notification('W', __('warning'), $res[1]);
    }
}

function fn_commercial_credit_create_order($order)
{
    //STATUS_INCOMPLETED_ORDER is used as a precursor to OPEN
    $res = modify_commercial_credit($order['user_id'], $order['total'], null, STATUS_INCOMPLETED_ORDER);
    if($res[0] === false) {
        fn_set_notification('E', __('error'), $res[1]);
        if(AREA === 'C') {
            fn_redirect(fn_url('checkout.cart'));
        }
    }
}

function fn_commercial_credit_delete_order($order_id) {
    $order = fn_get_order_info($_REQUEST['order_id']);
    if(!$order) {// order not found
        return;
    }
    $user = fn_get_user_info($order['user_id']);
    if(empty($user)) {// user not found
        return;
    }
    if($user['commercial_credit_enabled'] !== 'A') {
        return;
    }

    if($user_credit == 0) {// circumvent everything else
        return;
    }

    $user_credit = $user['commercial_credit'];

    $new_credit = $user_credit - $order['total'];
    if($new_credit < 0) {
        $new_credit = 0;
    }

    fn_update_user($order['user_id'], ['commercial_credit' => $new_credit],
        $_SESSION['auth'], false, false);
}

//add/substract from user credit the order total, based on order status
function modify_commercial_credit($user_id, $total, $old_status, $new_status)
{
    if(!user_has_limit_enabled($user_id)) {
        return;
    }

    define('INCREASE', 'I');
    define('DECREASE', 'D');

    $old_status_action = DECREASE;
    $new_status_action = INCREASE;

    if($old_status === '' && $new_status === 'N') {
        //handle deletion
        $old_status_action = INCREASE;
        $new_status_action = DECREASE;
    } else if ($old_status === null && $new_status === 'N') {
        //handle creation
        // do nothing
    } else {
        $old_status_arr = fn_get_statuses(STATUSES_ORDER, $old_status);
        if ($old_status === 'N') {
            $old_status_action = INCREASE;
        } else if(isset($old_status_arr[$old_status])) {
            $old_status_action = $old_status_arr[$old_status]['params']['commercial_credit'];
        }

        $new_status_arr = fn_get_statuses(STATUSES_ORDER, $new_status);
        if(isset($new_status_arr[$new_status])) {
            $new_status_action = $new_status_arr[$new_status]['params']['commercial_credit'];
        }
    }

    $value = 0.00;
    if((($old_status_action === INCREASE) && ($new_status_action === INCREASE)) ||
        (($old_status_action === DECREASE) && ($new_status_action === DECREASE))) {
        //there is no change, so do nothing
    } else if(($old_status_action === INCREASE) && ($new_status_action === DECREASE)) {
        $value -= $total;
    } else if(($old_status_action === DECREASE) && ($new_status_action === INCREASE)) {
        $value += $total;
    }

    $user = fn_get_user_info($user_id);
    $old_credit = $user['commercial_credit'];
    $credit_limit = $user['commercial_credit_limit'];

    $new_credit = $old_credit + $value;
    if(($new_credit > $credit_limit) && AREA === 'C') {
        return [false, __('comc.max_limit_exceeded', [
            "new_credit" => $new_credit,
            "credit_limit" => $credit_limit,
        ])];
    } else if($new_credit < 0) {
        $new_credit = 0;
    }

    $res = fn_update_user($user_id, ['commercial_credit' => $new_credit], $_SESSION['auth'], false, false);

    Tygh::$app['session']['cart']['user_data']['commercial_credit'] = $new_credit;

    if(is_array($res)) {
        $final = array_merge($res, ["commercial_credit" => $new_credit]);
        return [true, $final];
    }

    return [false, __('comc.user_update_error')];
}

function user_has_limit_enabled($user_id) {
    $user = fn_get_user_info($user_id);

    $enabled = false;
    if(empty($user)) {// user not found
        return false;
    }

    if($user['commercial_credit_enabled'] === 'A') {
        $enabled = true;
    }

    return $enabled;
}