<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
	'get_status_params_definition',
	'test_profile_update_user_pre',
	'get_users',

	'change_order_status_post',
	'create_order',
	'delete_order',
);