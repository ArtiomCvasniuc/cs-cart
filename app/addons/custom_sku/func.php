<?php

use Tygh\Registry;

/**
* split "product_code" in "product_code_ven" and "product_code_gen"
*/
function fn_custom_sku_test_products_update_get_post(&$product_data) {
	$parts = explode('-', $product_data['product_code']);

	$product_data['product_code_ven'] = $parts[0];
	$product_data['product_code_gen'] = $parts[1];

	unset($product_data['product_code']);
}

/*
* add vendor code to get_company_list ajax
*/
function fn_custom_sku_test_get_companies_list_extra_data(&$objects, &$total, &$action, &$onclick) {
	foreach($objects as &$obj) {
		$product_code = db_get_field("select product_code from ?:products as prod where prod.company_id = ?i order by prod.`timestamp` limit 1", $obj['company_id']);
		$vendor_code = !empty($product_code) ? explode("-", $product_code)[0] : null;

		$obj['data']['vendor_code'] = $vendor_code;
	}
}

/*
* generate "product_code_ven" and "product_code_gen" that replaces "product_code"
*/
function fn_custom_sku_test_add_product_data_options(&$product_data) {
	$cur_user = fn_get_user_info($_SESSION['auth']['user_id']);

	//run only when logged as vendor
	if($cur_user['user_type'] !== 'V') {
		return;
	}

	$company_id = Registry::get('runtime.company_id');

	$company_product_code_list = db_get_fields("select product_code from ?:products as prod where prod.company_id = ?i order by prod.`timestamp` asc", $company_id);
	
    $product_data['product_code_ven'] = '';
    $product_data['product_code_gen'] = '';
	$product_code = '';
	$existing_vendor_code = '';

	if(empty($company_product_code_list)) {
		// first product, so you generate a new vendor code
	    $product_data['product_code_ven'] = fn_custom_sku_generate_vendor_part($company_id);
	    $product_data['product_code_gen'] = '000001';
		$product_code = sprintf('%s-%s',
			$product_data['product_code_ven'] ,
			$product_data['product_code_gen']
		);
	} else {
		// get existing vendor code and generate a new last part until it is unique
		$existing_vendor_code = explode("-", $company_product_code_list[0])[0];

		do {
		    $product_data['product_code_ven'] = $existing_vendor_code;
		    $product_data['product_code_gen'] = fn_custom_sku_generate_last_part($company_id);
			$product_code = sprintf('%s-%s',
				$product_data['product_code_ven'] ,
				$product_data['product_code_gen']
			);
		} while(in_array($product_code, $company_product_code_list));
	}
	
	unset($product_data['product_code']);
}

/*
* get "product_code_ven" and "product_code_gen" from client and merge them into "product_code"
*/
function fn_custom_sku_test_update_product_pre(&$product_data) {
	// handle missing params case
    if(empty($product_data['product_code_ven']) || empty($product_data['product_code_gen'])) {
    	fn_set_notification('E', fn_get_lang_var('error'), __('custom_sku.parameter_not_found'));
        fn_save_post_data('product_data');

        $url = !empty($_REQUEST['product_id']) ?
        'products.update?product_id=' . $_REQUEST['product_id']
        : 'products.add';

        fn_redirect(fn_url($url), false, true);
        return;
    }

    //handle invalid format params case
    $temp_product_data = explode("_", $product_data['product_code_gen'])[0];
    if(!ctype_alnum($product_data['product_code_ven']) || !ctype_alnum($temp_product_data)) {
    	fn_set_notification('E', fn_get_lang_var('error'), __('custom_sku.parameter_invalid'));
        fn_save_post_data('product_data');

        $url = !empty($_REQUEST['product_id']) ?
        'products.update?product_id=' . $_REQUEST['product_id']
        : 'products.add';

        fn_redirect(fn_url($url), false, true);
        return;
	}

    $product_code = sprintf('%s-%s', $product_data['product_code_ven'] ,
    	$product_data['product_code_gen']);

	$db_product_code = fn_get_product_code($_REQUEST['product_id']);

	// handle duplicate param case
	if($db_product_code !== $product_code) {
		$company_product_code_list = db_get_fields("select product_code from ?:products as prod order by prod.`timestamp` asc",
			["product_id", "product_code", "company_id"]);

		if(in_array($product_code, $company_product_code_list)) {
			fn_set_notification('E', fn_get_lang_var('error'), __('custom_sku.duplicate'));
            fn_save_post_data('product_data');

            $url = !empty($_REQUEST['product_id']) ?
            'products.update?product_id=' . $_REQUEST['product_id']
            : 'products.add';

            fn_redirect(fn_url($url), false, true);
            return;
		}
	}

	$product_data['product_code'] = $product_code;

    unset($product_data['product_code_ven']);
    unset($product_data['product_code_gen']);
}

function fn_custom_sku_generate_vendor_part(int $company_id): string {
	$seed_letter = [rand(65, 90), rand(65, 90), rand(65, 90)];
	$seed_id = str_pad($company_id, 3, rand(0, 9), STR_PAD_LEFT);

	$vendor = sprintf('%c%d%c%d%c%d', $seed_letter[0], $seed_id[0], $seed_letter[1],
		$seed_id[1], $seed_letter[2], $seed_id[2]);

	return $vendor;
}

function fn_custom_sku_generate_last_part(int $company_id): string {
	return (string)rand(0, 999999);
}

/*
* remove any character that is not alpha-numeric
*/
function fn_custom_sku_slugify(string $string): string {
	return strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '', $string)));
}

function fn_custom_sku_get_company_vendor_code(int $company_id): string {
	$company_product_code = db_get_field("select product_code from ?:products as prod where prod.company_id = ?i order by prod.`timestamp` asc", $company_id);

	return explode("-", $company_product_code)[0];
}