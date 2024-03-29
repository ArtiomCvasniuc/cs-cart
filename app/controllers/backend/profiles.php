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

use Tygh\Api;
use Tygh\Enum\UserTypes;
use Tygh\Enum\YesNo;
use Tygh\Registry;
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($mode == 'm_delete') {

        if (!empty($_REQUEST['user_ids'])) {
            foreach ($_REQUEST['user_ids'] as $v) {
                fn_delete_user($v);
            }
        }

        return array(CONTROLLER_STATUS_OK, 'profiles.manage' . (isset($_REQUEST['user_type']) ? '?user_type=' . $_REQUEST['user_type'] : '' ));
    }

    if ($mode == 'export_range') {
        if (!empty($_REQUEST['user_ids'])) {

            if (empty(Tygh::$app['session']['export_ranges'])) {
                Tygh::$app['session']['export_ranges'] = array();
            }

            if (empty(Tygh::$app['session']['export_ranges']['users'])) {
                Tygh::$app['session']['export_ranges']['users'] = array('pattern_id' => 'users');
            }

            Tygh::$app['session']['export_ranges']['users']['data'] = array('user_id' => $_REQUEST['user_ids']);

            unset($_REQUEST['redirect_url']);

            return array(CONTROLLER_STATUS_REDIRECT, 'exim.export?section=users&pattern_id=' . Tygh::$app['session']['export_ranges']['users']['pattern_id']);
        }
    }

    //
    // Create/Update user
    //
    if ($mode == 'update' || $mode == 'add') {
        $profile_id = !empty($_REQUEST['profile_id']) ? $_REQUEST['profile_id'] : 0;
        $_uid = !empty($profile_id) ? db_get_field("SELECT user_id FROM ?:user_profiles WHERE profile_id = ?i", $profile_id) : $auth['user_id'];
        $user_id = empty($_REQUEST['user_id']) ? (($mode == 'add') ? '' : $_uid) : $_REQUEST['user_id'];

        $mode = empty($_REQUEST['user_id']) ? 'add' : 'update';
        // TODO: FIXME user_type
        if (Registry::get('runtime.company_id') && $user_id != $auth['user_id']) {
            $_REQUEST['user_data']['user_type'] = !empty($_REQUEST['user_type']) ? $_REQUEST['user_type'] : 'C';
        }

        // sprint_6_show_product_price_only_for_authorized_users
        if(!isset($_REQUEST['user_data']['show_product_price_only_for_auth_users'])) {
            $_REQUEST['user_data']['show_product_price_only_for_auth_users'] = 'off';
        }

        // Restricted admin cannot change its user type
        if (fn_is_restricted_admin($_REQUEST) && $user_id == $auth['user_id'] || ($user_id == $auth['user_id'] && $auth['area'] == 'A')) {
            $_REQUEST['user_type'] = '';
            $_REQUEST['user_data']['user_type'] = $auth['user_type'];
        }

        /**
         * Only admin can set the api key.
         */
        if (empty($_REQUEST['user_api_status']) || $_REQUEST['user_api_status'] == 'N') {
            $_REQUEST['user_data']['api_key'] = '';
        }

        fn_restore_processed_user_password($_REQUEST['user_data'], $_POST['user_data']);

        fn_set_hook('test_profile_update_user_pre', $_REQUEST);

        $res = fn_update_user(
            $user_id,
            $_REQUEST['user_data'],
            $auth,
            !empty($_REQUEST['ship_to_another']),
            !empty($_REQUEST['notify_customer'])
        );

        if ($res) {
            list($user_id, $profile_id) = $res;

            if (!empty($_REQUEST['return_url'])) {
                return array(CONTROLLER_STATUS_OK, $_REQUEST['return_url']);
            }
        } else {
            fn_save_post_data('user_data');
            fn_delete_notification('changes_saved');
        }

        $redirect_params =  array(
            'user_id' => $user_id
        );

        if (Registry::get('settings.General.user_multiple_profiles') == 'Y') {
            $redirect_params['profile_id'] = $profile_id;
        }

        if (!empty($_REQUEST['user_type'])) {
            $redirect_params['user_type'] = $_REQUEST['user_type'];
        }

        if (!empty($_REQUEST['return_url'])) {
            $redirect_params['return_url'] = urlencode($_REQUEST['return_url']);
        }

        return array(CONTROLLER_STATUS_OK, 'profiles' . (!empty($user_id) ? '.update' : '.add') . '?' . http_build_query($redirect_params));
    }

    if ($mode == 'delete') {

        $user_type = fn_get_request_user_type($_REQUEST);
        fn_delete_user($_REQUEST['user_id']);

        return array(CONTROLLER_STATUS_REDIRECT, 'profiles.manage?user_type=' . $user_type);

    }

    if ($mode == 'delete_profile') {

        if (fn_is_restricted_admin($_REQUEST)) {
            return array(CONTROLLER_STATUS_DENIED);
        }

        $user_id = empty($_REQUEST['user_id']) ? $auth['user_id'] : $_REQUEST['user_id'];

        fn_delete_user_profile($user_id, $_REQUEST['profile_id']);

        return array(CONTROLLER_STATUS_OK, 'profiles.update?user_id=' . $user_id);

    }

    if ($mode == 'update_status') {
        $condition = fn_get_company_condition('?:users.company_id');
        $user_data = db_get_row("SELECT * FROM ?:users WHERE user_id = ?i $condition", $_REQUEST['id']);
        if (!empty($user_data)) {
            $result = db_query("UPDATE ?:users SET status = ?s WHERE user_id = ?i", $_REQUEST['status'], $_REQUEST['id']);
            if ($result && $_REQUEST['id'] != 1) {
                fn_set_notification('N', __('notice'), __('status_changed'));
                $force_notification = fn_get_notification_rules($_REQUEST);

                /** @var \Tygh\Notifications\EventDispatcher $event_dispatcher */
                $event_dispatcher = Tygh::$app['event.dispatcher'];

                if (!empty($force_notification['C']) && $_REQUEST['status'] == 'A' && $user_data['status'] == 'D' || $user_data['status'] == 'P') {
                    $event_dispatcher->dispatch('profile.activated.' . strtolower($user_data['user_type']), [
                        'user_data' => $user_data
                    ]);
                } elseif (!empty($force_notification['C']) && $_REQUEST['status'] == 'D' && $user_data['status'] == 'A') {
                    $event_dispatcher->dispatch('profile.deactivated.' . strtolower($user_data['user_type']), [
                        'user_data' => $user_data
                    ]);
                }
            } else {
                fn_set_notification('E', __('error'), __('error_status_not_changed'));
                Tygh::$app['ajax']->assign('return_status', $user_data['status']);
            }
        }

        exit;
    }

    if ($mode == 'generate_api_key') {
        if (!defined('AJAX_REQUEST')) {
            return [CONTROLLER_STATUS_NO_PAGE];
        }

        Tygh::$app['ajax']->assign('new_api_key', Api::generateKey());
        exit;
    }
}

if ($mode == 'manage') {

    if (
        Registry::get('runtime.company_id')
        && !empty($_REQUEST['user_type'])
        && (
            $_REQUEST['user_type'] == 'P'
            || (
                $_REQUEST['user_type'] == 'A'
                && !fn_check_permission_manage_profiles('A')
            )
        )
    ) {
        return array(CONTROLLER_STATUS_DENIED);
    }

    if (!empty($_REQUEST['user_type']) && $_REQUEST['user_type'] == 'V' && fn_allowed_for('ULTIMATE')) {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    if(Registry::get('settings.commercial_credit')) {
        Tygh::$app['view']->assign('commercial_credit_limit', Registry::get('settings.commercial_credit')['general']['limit']);
    }
    list($users, $search) = fn_get_users($_REQUEST, $auth, Registry::get('settings.Appearance.admin_elements_per_page'));

    $user_ids = array_column($users, 'user_id');
    $orders_statistics = fn_get_user_order_statistics($user_ids);

    Tygh::$app['view']->assign('users', $users);
    Tygh::$app['view']->assign('search', $search);
    Tygh::$app['view']->assign('can_view_orders', fn_check_permissions('orders', 'manage', 'admin'));
    Tygh::$app['view']->assign('settled_statuses', fn_get_settled_order_statuses());
    Tygh::$app['view']->assign('orders_stats', $orders_statistics);

    if (!empty($search['user_type'])) {
        Tygh::$app['view']->assign('user_type_description', fn_get_user_type_description($search['user_type']));
    }

    $can_add_user = fn_check_view_permissions('profiles.add')
        && (isset($_REQUEST['user_type']))
        && fn_check_permission_manage_profiles($_REQUEST['user_type']);

    Tygh::$app['view']->assign('countries', fn_get_simple_countries(true, CART_LANGUAGE));
    Tygh::$app['view']->assign('states', fn_get_all_states());
    Tygh::$app['view']->assign('usergroups', fn_get_usergroups(array('status' => array('A', 'H')), DESCR_SL));
    Tygh::$app['view']->assign('can_add_user', $can_add_user);

} elseif ($mode == 'act_as_user' || $mode == 'view_product_as_user' || $mode == 'login_as_vendor') {

    $user_id = empty($_REQUEST['user_id']) ? 0 : (int) $_REQUEST['user_id'];

    if ($mode == 'login_as_vendor') {
        if (empty($_REQUEST['company_id'])) {
            return [CONTROLLER_STATUS_NO_PAGE];
        }

        $user_id = fn_get_company_root_admin_user_id((int) $_REQUEST['company_id']);
    }

    $condition = '';
    $_suffix = '';

    if (fn_allowed_for('MULTIVENDOR') && $mode == 'act_as_user') {
        $show_admin = isset($auth['company_id']) && $auth['company_id'] == 0;
        $condition = fn_get_company_condition('?:users.company_id', true, fn_get_styles_owner(), $show_admin);
    }

    $user_data = db_get_row("SELECT * FROM ?:users WHERE user_id = ?i $condition", $user_id);

    if (empty($user_data)) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    $act_as_self = $user_id == $auth['user_id'];
    if (!$act_as_self && !fn_check_permission_manage_profiles($user_data['user_type'])) {
        return [CONTROLLER_STATUS_DENIED];
    }

    if (!empty($user_data)) {
        if (!empty($_REQUEST['area'])) {
            $area = $_REQUEST['area'];
        } else {
            $area = fn_check_user_type_admin_area($user_data)
                ? 'A'
                : 'C';
        }

        if (fn_allowed_for('MULTIVENDOR')) {
            if ($user_data['user_type'] === 'V') {
                $area = $area === 'A'
                    ? 'V'
                    : $area;
            }
        }

        $sess_data = [
            'auth'        => fn_fill_auth($user_data, [], true, $area),
            'last_status' => empty(Tygh::$app['session']['last_status'])
                ? ''
                : Tygh::$app['session']['last_status'],
        ];

        $redirect_url = !empty($_REQUEST['redirect_url'])
            ? $_REQUEST['redirect_url']
            : '';

        $enabled_customization_modes = fn_get_customization_modes();

        $areas = [
            'A' => 'admin',
            'V' => 'vendor',
            'C' => 'customer',
        ];

        $old_sess_id = Tygh::$app['session']->getID();

        Registry::set('runtime.is_restoring_cart_from_backend', true);

        if ($area === 'C') {
            // Save unique key for session
            $session_key = fn_crc32(microtime()) . fn_crc32(microtime(true) + 1);

            $redirect_url = fn_link_attach($redirect_url, 'skey=' . $session_key);

            /** @var \Tygh\Storefront\Repository $storefront_repository */
            $storefront_repository = Tygh::$app['storefront.repository'];

            $storefront_id = fn_get_storefront_id_from_uri($redirect_url);

            /** @var \Tygh\Storefront\Storefront $storefront_of_redirect */
            $storefront_of_redirect = Tygh::$app['storefront'];
            if ($storefront_id) {
                $storefront_of_redirect = $storefront_repository->findById($storefront_id);
            }

            if (fn_allowed_for('ULTIMATE')) {
                // Redirect to the personal frontend
                $company_id = !empty($user_data['company_id'])
                    ? $user_data['company_id']
                    : fn_get_runtime_company_id();

                if (!$company_id) {
                    $company_id = fn_get_company_id_from_uri($redirect_url);
                }

                if ($company_id) {
                    $storefront_of_redirect = $storefront_repository->findByCompanyId($company_id);
                } else {
                    $storefront_of_redirect = $storefront_repository->findFirstActiveStorefront();
                    if (!$storefront_of_redirect) {
                        $storefront_of_redirect = $storefront_repository->findDefault();
                        if (!$storefront_of_redirect) {
                            fn_set_notification('W', __('notice'), __('no_active_storefronts'));
                            return [CONTROLLER_STATUS_REDIRECT, 'companies.manage'];
                        }
                    }
                }
            }

            $redirect_url = fn_link_attach($redirect_url, 'storefront_id=' . $storefront_of_redirect->storefront_id);

            $sess_data['store_access_key'] = $storefront_of_redirect->access_key;

            // enable theme editor
            if ((!empty($_REQUEST['customize_theme']) || !empty($enabled_customization_modes['theme_editor']['enabled']))
                && in_array($sess_data['auth']['user_type'], ['A', 'V'])
                && (empty($sess_data['auth']['company_id']) || $sess_data['auth']['company_id'] == fn_get_styles_owner())
            ) {
                $sess_data['customize_theme'] = true;
                $sess_data['auth']['company_id'] = (int) fn_get_styles_owner();
            }
            fn_init_user_session_data($sess_data, $user_id, true);

            fn_set_storage_data('session_' . $session_key . '_data', serialize($sess_data));
        } else {

            fn_init_user_session_data($sess_data, $user_id, true);

            // Set flag for backward compatibility
            $should_stop_session = version_compare(PHP_VERSION, '7.2.0', '>=');
            /** @var Tygh\Web\Session $session */
            $session = Tygh::$app['session'];
            if ($should_stop_session) {
                // Stop session for rename it
                $session->shutdown();
            }
            $session->setName($areas[$area]);
            // Generating a new session ID for the user on whose behalf we want to login
            $sess_id = $session->regenerateID();
            if ($should_stop_session) {
                // Stop session because it started again in the regenerateID method
                $session->shutdown();
            }
            // Save new session data here, because shutdown may rewrite it
            $session->save($sess_id, $sess_data);

            if ($should_stop_session) {
                $session->start($sess_id);
            } else {
                // Restore old session name and ID to keep admin's login active
                $session->setName(ACCOUNT_TYPE);
                $session->setID($old_sess_id);
            }
        }
        $redirect_url = fn_url($redirect_url, $area);

        Registry::del('runtime.is_restoring_cart_from_backend');

        return [CONTROLLER_STATUS_REDIRECT, $redirect_url, $area !== AREA];
    }
} elseif ($mode == 'picker') {
    $params = $_REQUEST;
    $params['exclude_user_types'] = array ('A', 'V');
    $params['skip_view'] = 'Y';

    list($users, $search) = fn_get_users($params, $auth, Registry::get('settings.Appearance.admin_elements_per_page'));
    Tygh::$app['view']->assign('users', $users);
    Tygh::$app['view']->assign('search', $search);

    Tygh::$app['view']->assign('countries', fn_get_simple_countries(true, CART_LANGUAGE));
    Tygh::$app['view']->assign('states', fn_get_all_states());
    Tygh::$app['view']->assign('usergroups', fn_get_usergroups(array('status' => array('A', 'H')), CART_LANGUAGE));

    Tygh::$app['view']->display('pickers/users/picker_contents.tpl');
    exit;

} elseif ($mode == 'password_reminder') {

    $cron_password = Registry::get('settings.Security.cron_password');

    if ((!isset($_REQUEST['cron_password']) || $cron_password != $_REQUEST['cron_password']) && (!empty($cron_password))) {
        die(__('access_denied'));
    }

    $expire = Registry::get('settings.Security.admin_password_expiration_period') * SECONDS_IN_DAY;

    if ($expire) {
        // Get available admins
        $recipients = db_get_array("SELECT user_id FROM ?:users WHERE user_type IN('A', 'V') AND status = 'A' AND (UNIX_TIMESTAMP() - password_change_timestamp) >= ?i", $expire);
        if (!empty($recipients)) {

            /** @var \Tygh\Notifications\EventDispatcher $event_dispatcher */
            $event_dispatcher = Tygh::$app['event.dispatcher'];

            foreach ($recipients as $v) {
                $_user_data = fn_get_user_info($v['user_id'], true);

                $event_dispatcher->dispatch('profile.password_reminder', [
                    'user_data' => $_user_data
                ]);
            }
        }

        fn_echo(__('administrators_notified', array(
            '[count]' => count($recipients)
        )));
    }

    exit;
} elseif ($mode == 'update' || $mode == 'add') {
    if (empty($_REQUEST['user_type']) && (empty($_REQUEST['user_id']) || $_REQUEST['user_id'] != $auth['user_id'])) {

        $user_type = fn_get_request_user_type($_REQUEST);

        $params = array();
        if (!empty($_REQUEST['user_id'])) {
            $params['user_id'] = $_REQUEST['user_id'];
        }
        $params['user_type'] = $user_type;

        return array(CONTROLLER_STATUS_REDIRECT, 'profiles.' . $mode . '?' . http_build_query($params));
    }

    if ($mode == 'add') {
        if (fn_allowed_for('ULTIMATE')) {
            if (!empty($_REQUEST['user_type']) && $_REQUEST['user_type'] == 'V') {
                return array(CONTROLLER_STATUS_NO_PAGE);
            }

            if (Registry::get('runtime.company_id')) {
                if (empty($_REQUEST['user_type'])) {
                    $_GET['user_type'] = 'C';

                    return array(CONTROLLER_STATUS_REDIRECT, 'profiles.add?' . http_build_query($_GET));
                } elseif ($_REQUEST['user_type'] == 'A' && !fn_check_permission_manage_profiles('A')) {
                    return array(CONTROLLER_STATUS_DENIED);
                }
            }
        }

        if (fn_allowed_for('MULTIVENDOR')) {
            $user_types = fn_get_user_types();

            if (Registry::get('runtime.company_id')) {
                if (empty($_REQUEST['user_type'])) {
                    return array(CONTROLLER_STATUS_REDIRECT, 'profiles.add?user_type=' . fn_get_request_user_type($_REQUEST));

                } elseif ($_REQUEST['user_type'] == 'C') {
                    return array(CONTROLLER_STATUS_DENIED);

                } elseif ($_REQUEST['user_type'] == 'A') {
                    $_GET['user_type'] = 'V';

                    return array(CONTROLLER_STATUS_REDIRECT, 'profiles.add?' . http_build_query($_GET));

                } elseif (empty($user_types[$_REQUEST['user_type']])) {
                    return array(CONTROLLER_STATUS_DENIED);
                }
            }
        }

    } else {
        if (fn_allowed_for('MULTIVENDOR')) {
            if (Registry::get('runtime.company_id') && !empty($_REQUEST['user_id']) && $_REQUEST['user_id'] != $auth['user_id']) {
                if (empty($_REQUEST['user_type'])) {
                    $_GET['user_type'] = fn_get_request_user_type($_REQUEST);

                    return array(CONTROLLER_STATUS_REDIRECT, 'profiles.update?' . http_build_query($_GET));
                } elseif ($_REQUEST['user_type'] == 'A') {
                    $_GET['user_type'] = 'V';

                    return array(CONTROLLER_STATUS_REDIRECT, 'profiles.update?' . http_build_query($_GET));
                }
            }
        }
    }

    if (
        Registry::get('runtime.company_id')
        && !empty($_REQUEST['user_type'])
        && (
            $_REQUEST['user_type'] == 'P'
            || (
                $_REQUEST['user_type'] == 'A'
                && !fn_check_permission_manage_profiles('A')
            )
        )
    ) {
        return array(CONTROLLER_STATUS_DENIED);
    }

    if (!empty($_REQUEST['user_id']) && !empty($_REQUEST['user_type'])) {
        if ($_REQUEST['user_id'] == $auth['user_id'] && defined('RESTRICTED_ADMIN') && !in_array($_REQUEST['user_type'], array('A', ''))) {
            return array(CONTROLLER_STATUS_REDIRECT, 'profiles.update?user_id=' . $_REQUEST['user_id']);
        }
    }

    // copy to add below this line
    $profile_id = !empty($_REQUEST['profile_id']) ? $_REQUEST['profile_id'] : 0;
    $_uid = !empty($profile_id) ? db_get_field("SELECT user_id FROM ?:user_profiles WHERE profile_id = ?i", $profile_id) : $auth['user_id'];
    $user_id = empty($_REQUEST['user_id']) ? (($mode == 'add') ? '' : $_uid) : $_REQUEST['user_id'];

    if (!empty($_REQUEST['profile']) && $_REQUEST['profile'] == 'new') {
        $user_data = fn_get_user_info($user_id, false);
    } else {
        $user_data = fn_get_user_info($user_id, true, $profile_id);

        $orders_statistics = fn_get_user_order_statistics([$user_id]);
    }

    $saved_user_data = fn_restore_post_data('user_data');
    if (!empty($saved_user_data)) {
        $user_data = fn_array_merge($user_data, $saved_user_data);
    }

    if ($mode == 'update') {
        if (empty($user_data)) {
            return array(CONTROLLER_STATUS_NO_PAGE);
        }
    }

    $user_data['user_id'] = empty($user_data['user_id']) ? (!empty($user_id) ? $user_id : 0) : $user_data['user_id'];
    $user_data['user_type'] = empty($user_data['user_type']) ? 'C' : $user_data['user_type'];
    $user_type = (!empty($_REQUEST['user_type'])) ? ($_REQUEST['user_type']) : $user_data['user_type'];
    $auth['is_root'] = isset($auth['is_root']) ? $auth['is_root'] : '';

    $usergroups = fn_get_available_usergroups($user_type);

    $navigation = [
        'general' => [
            'title' => __('general'),
            'js' => true
        ],
        'addons' => [
            'title' => __('addons'),
            'js' => true
        ]
    ];

    if ($mode == 'update'
        && !Registry::get('runtime.company_id')
        && ($user_type == UserTypes::CUSTOMER
        || ($user_type == UserTypes::VENDOR && fn_check_permission_manage_profiles($user_type))
        || ($user_type == UserTypes::ADMIN && $auth['is_root'] === YesNo::YES && !empty($user_data['is_root']) && $user_data['is_root'] !== YesNo::YES))
    ) {
        $navigation['usergroups'] = [
            'title' => __('usergroups'),
            'js' => true
        ];

    } else {
        $usergroups = [];
    }

    if(Registry::get('settings.commercial_credit')) {
        Tygh::$app['view']->assign('commercial_credit_limit', Registry::get('settings.commercial_credit.general.limit'));
    }
    if (empty($user_data['api_key'])) {
        Tygh::$app['view']->assign('new_api_key', Api::generateKey());
    }

    /**
     * Only admin can set the api key.
     */
    if (fn_check_user_type_admin_area($user_data) && !empty($user_data['user_id']) && ($auth['user_type'] == 'A' || $user_data['api_key'])) {
        $navigation['api'] = array (
            'title' => __('api_access'),
            'js' => true
        );

        Tygh::$app['view']->assign('show_api_tab', true);

        if ($auth['user_type'] != 'A') {
            Tygh::$app['view']->assign('hide_api_checkbox', true);
        }
    }

    Registry::set('navigation.tabs', $navigation);

    Tygh::$app['view']->assign('usergroups', $usergroups);
    Tygh::$app['view']->assign('hide_inputs', !fn_check_editable_permissions($auth, $user_data));

    $profile_fields = fn_get_profile_fields($user_type);
    Tygh::$app['view']->assign('user_type', $user_type);
    Tygh::$app['view']->assign('can_view_orders', fn_check_permissions('orders', 'manage', 'admin'));
    Tygh::$app['view']->assign('settled_statuses', fn_get_settled_order_statuses());
    Tygh::$app['view']->assign('profile_fields', $profile_fields);
    Tygh::$app['view']->assign('user_data', $user_data);
    Tygh::$app['view']->assign('orders_stats', $orders_statistics);
    Tygh::$app['view']->assign('ship_to_another', fn_check_shipping_billing($user_data, $profile_fields));
    if (Registry::get('settings.General.user_multiple_profiles') == 'Y' && !empty($user_id)) {
        Tygh::$app['view']->assign('user_profiles', fn_get_user_profiles($user_id));
    }

    Tygh::$app['view']->assign('countries', fn_get_simple_countries(true, CART_LANGUAGE));
    Tygh::$app['view']->assign('states', fn_get_all_states());
}

if ($mode == 'get_customer_list') {
    $page_number = isset($_REQUEST['page']) ? (int) $_REQUEST['page'] : 1;
    $page_size = isset($_REQUEST['page_size']) ? (int) $_REQUEST['page_size'] : 10;
    $search_query = isset($_REQUEST['q']) ? $_REQUEST['q'] : null;

    $params = array(
        'area' => 'A',
        'page' => $page_number,
        'extended_search' => false,
        'search_query' => $search_query,
        'items_per_page' => $page_size,
        'exclude_user_types' => array ('A', 'V')
    );

    list($users, $params) = fn_get_users($params, $auth, $page_size);

    $objects = array_values(array_map(function ($customer_list) {
        return array(
            'id' => $customer_list['user_id'],
            'text' => $customer_list['firstname'] . ' ' . $customer_list['lastname'],
            'email' => $customer_list['email'],
            'phone' => $customer_list['phone'],
        );
    }, $users));

    Tygh::$app['ajax']->assign('objects', $objects);
    Tygh::$app['ajax']->assign('total_objects', isset($params['total_items']) ? $params['total_items'] : count($objects));

    exit;
}
