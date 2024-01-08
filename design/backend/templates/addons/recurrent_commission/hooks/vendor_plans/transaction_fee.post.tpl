<div class="control-group">
    <label class="control-label" for="elm_enable_recurrent_{$id}">{__("vendor_plans.enable_recurrent")}:</label>
    <div class="controls">
        <input id="elm_enable_recurrent_{$id}" type="hidden" name="plan_data[enable_recurrent]" class="input-mini" value="{$plan.enable_recurrent}">
        <input id="elm_enable_recurrent_fake_{$id}" type="checkbox" class="input-mini"></div>
</div>

<div id="recurrent_settings" class="recurrent_is_not_enabled">
	<div class="control-group">
	    <label class="control-label" for="elm_recurrent_commission_{$id}">{__("vendor_plans.recurrent_commission")}:</label>
	    <div class="controls">
	        <input id="elm_recurrent_commission_{$id}" type="text" name="plan_data[recurrent_commission]" class="input-mini" value="{$plan.recurrent_commission}" size="4"> %</div>
	</div>

	<div class="control-group">
	    <label class="control-label" for="elm_recurrent_step_{$id}">{__("vendor_plans.recurrent_step")}:</label>
	    <div class="controls">
	        <input id="elm_recurrent_step_{$id}" type="number" name="plan_data[recurrent_step]" class="input-mini" value="{$plan.recurrent_step}" size="11"></div>
	</div>
</div>

<style>
.recurrent_is_not_enabled {
	display: none;
}
</style>
	
<script>
(function(_, $) {
	let is_enabled_input = $("#elm_enable_recurrent_{$id|escape:javascript}");
	let is_enabled_input_fake = $("#elm_enable_recurrent_fake_{$id|escape:javascript}");
	let recurrent_cnt = $("#recurrent_settings");

	is_enabled_input_fake.on("change", (evt) => {
		recurrent_cnt.toggleClass('recurrent_is_not_enabled');
		is_enabled_input.val(is_enabled_input.val() == '0' ? '1' : '0');
	});

	if(is_enabled_input.val() !== '0') {
		is_enabled_input.val('0');
		is_enabled_input_fake.trigger('click');
	}
}(Tygh, Tygh.$));
</script>