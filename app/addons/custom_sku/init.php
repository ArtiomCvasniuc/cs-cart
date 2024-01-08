<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'test_update_product_pre',
    'test_add_product_data_options',
    'test_get_companies_list_extra_data',
    'test_products_update_get_post',
);