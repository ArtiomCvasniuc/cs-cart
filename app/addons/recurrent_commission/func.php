<?php

/**
* modify commission percent if the number of completed orders between the client and the vendor,
* are above a set treshold
*/
function fn_recurrent_commission_vendor_plans_calculate_commission_for_payout_before(&$order_info, &$company_data, &$payout_data, &$total, &$shipping_cost, &$surcharge_from_total, &$surcharge_to_commission, &$commission) {
	$curr_vendor_plan = db_get_row("SELECT * FROM ?:vendor_plans WHERE plan_id = 9;");

	if($curr_vendor_plan['enable_recurrent']) {
		$completed_orders_count = db_get_field("SELECT COUNT(order_id) FROM ?:orders WHERE 
			company_id = ?i AND 
			user_id = ?i AND 
			status = ?s;", $order_info['company_id'], $order_info['user_id'], 'C');

		if ($completed_orders_count >= $curr_vendor_plan['recurrent_step']) {
			$commission = $curr_vendor_plan['recurrent_commission'];
		}
	}
}