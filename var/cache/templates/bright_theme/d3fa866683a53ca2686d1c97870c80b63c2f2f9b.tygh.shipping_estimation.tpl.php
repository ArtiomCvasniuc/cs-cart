<?php /* Smarty version Smarty-3.1.21, created on 2020-10-30 11:36:30
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\views\checkout\components\shipping_estimation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14885914675f9941e41adc09-59457521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3fa866683a53ca2686d1c97870c80b63c2f2f9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\views\\checkout\\components\\shipping_estimation.tpl',
      1 => 1604046974,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14885914675f9941e41adc09-59457521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9941e4323786_81058675',
  'variables' => 
  array (
    'runtime' => 0,
    'location' => 0,
    'additional_id' => 0,
    'cart' => 0,
    'id_suffix' => 0,
    'shipping_estimation_block_id' => 0,
    'states' => 0,
    'prefix' => 0,
    'settings' => 0,
    '_country' => 0,
    'class_suffix' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'state' => 0,
    '_state' => 0,
    'buttons_class' => 0,
    'product_groups' => 0,
    'group' => 0,
    'product' => 0,
    'show_only_first_shipping' => 0,
    'group_key' => 0,
    'shipping' => 0,
    'rate' => 0,
    'tax' => 0,
    'inc_tax_lang' => 0,
    'checked' => 0,
    'delivery_time' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9941e4323786_81058675')) {function content_5f9941e4323786_81058675($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('calculate_shipping_cost','country','select_country','state','select_state','city','zip_postal_code','get_rates','select_shipping_method','none','free_shipping','no_shipping_required','free_shipping','text_no_shipping_methods','total','select','text_no_shipping_methods','recalculate_rates','select_shipping_method','get_rates','calculate_shipping_cost','country','select_country','state','select_state','city','zip_postal_code','get_rates','select_shipping_method','none','free_shipping','no_shipping_required','free_shipping','text_no_shipping_methods','total','select','text_no_shipping_methods','recalculate_rates','select_shipping_method','get_rates'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>
    <?php $_smarty_tpl->tpl_vars["prefix"] = new Smarty_variable("sidebox_", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
    <?php $_smarty_tpl->tpl_vars["buttons_class"] = new Smarty_variable("hidden", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["buttons_class"] = new Smarty_variable("buttons-container", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["class_suffix"] = new Smarty_variable("-".((string)$_smarty_tpl->tpl_vars['additional_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable("_".((string)$_smarty_tpl->tpl_vars['additional_id']->value), null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['cart']->value) {?>
    <?php $_smarty_tpl->tpl_vars['cart'] = new Smarty_variable($_SESSION['cart'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox"&&$_smarty_tpl->tpl_vars['location']->value!="popup") {?>

<div id="est_box<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-estimation-box">
    <h3 class="ty-subheader"><?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
</h3>
<?php }?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?><?php echo "_sidebox";?><?php }
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["shipping_estimation_block_id"] = new Smarty_variable("shipping_estimation".$_tmp1.((string)$_smarty_tpl->tpl_vars['id_suffix']->value), null, 0);?>

        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->tpl_vars['countries'] = new Smarty_variable(fn_get_simple_countries(true), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['states'] = new Smarty_variable(fn_get_all_states(true), null, 0);?>
            <?php if (!Smarty::$_smarty_vars['capture']['states_built']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>$_smarty_tpl->tpl_vars['states']->value), 0);?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("states_built", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php }?>

            <form class="cm-ajax" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
estimation_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?><input type="hidden" name="location" value="sidebox" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?><input type="hidden" name="additional_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
,shipping_estimation_buttons,shipping_estimation_rates<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" />

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_estimation_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country'], null, 0);?>

                <?php if (!isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country'])) {?>
                    <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], null, 0);?>
                <?php }?>

                <?php if (!isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'])&&$_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']) {?>
                    <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'], null, 0);?>
                <?php }?>

                <div class="ty-control-group">
                    <label class="ty-control-group__label cm-required" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("country");?>
</label>
                    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-country cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium" name="customer_location[country]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("state");?>
</label>
                    <select class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?> ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[state]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code']==$_smarty_tpl->tpl_vars['_state']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                    <input type="text" class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']]) {?>hidden<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_d" name="customer_location[state]" size="20" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']]) {?>disabled="disabled"<?php }?> />
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("city");?>
</label>
                    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[city]" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[zipcode]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("get_rates"),'but_name'=>"dispatch[checkout.shipping_estimation.get_rates]",'but_role'=>"text",'but_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value)), 0);?>

                </div>

            </form>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="shipping_estimation"||$_REQUEST['show_shippings']=="Y") {?>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']&&!$_smarty_tpl->tpl_vars['cart']->value['company_shipping_failed']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
                        <div class="ty-estimation__title"><?php echo $_smarty_tpl->__("select_shipping_method");?>
</div>
                    <?php }?>

                    <div id="shipping_estimation_rates<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <form class="cm-ajax" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_shipping_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <input type="hidden" name="redirect_mode" value="cart" />
                    <input type="hidden" name="result_ids" value="checkout_totals" />
                    <input type="hidden" name="suffix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" />

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_estimation")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                        
                        <?php if (!fn_allowed_for("ULTIMATE")||smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                            <p>
                                <strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['group']->value['name'])===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong>
                            </p>
                        <?php }?>
                        <?php if (!fn_allowed_for("ULTIMATE")||smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                            <ul>
                            <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                    <?php } else { ?>
                                        <?php echo htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </li>
                            <?php } ?>
                            </ul>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                            <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["shipping"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping"]->index++;
 $_smarty_tpl->tpl_vars["shipping"]->first = $_smarty_tpl->tpl_vars["shipping"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["estimate_group_shipping"]['first'] = $_smarty_tpl->tpl_vars["shipping"]->first;
?>
                                <?php if (!$_smarty_tpl->tpl_vars['show_only_first_shipping']->value||$_smarty_tpl->getVariable('smarty')->value['foreach']['estimate_group_shipping']['first']) {?>

                                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable("checked=\"checked\"", null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('', null, 0);?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']||$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time']) {?>
                                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable("(".((string)(($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] : $tmp)).")", null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable('', null, 0);?>
                                    <?php }?>

                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_estimation_method")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_method"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rate")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                                                    <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["inc_tax_lang"] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                                                <?php }?>
                                            <?php } elseif (fn_is_lang_var_exists("free_shipping")) {?>
                                                <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable($_smarty_tpl->__("free_shipping"), null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable('', null, 0);?>
                                            <?php }?>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <p>
                                        <input
                                            type="radio"
                                            class="ty-valign"
                                            id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                                            onclick="fn_calculate_total_shipping('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
');"
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'UTF-8');?>
 />
                                            <label for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                class="ty-valign" id="shipping_label_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->tpl_vars['rate']->value) {?> <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?>
                                            <!--shipping_label_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></label>
                                    </p>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_method"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>
                            <?php } ?>

                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                                <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['free_shipping']) {?>
                                <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                            <?php } else { ?>
                                <p><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                            <?php }?>
                        <?php }?>

                    <?php } ?>

                    <div id="shipping_estimation_total<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <p><strong><?php echo $_smarty_tpl->__("total");?>
:</strong>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"ty-price"), 0);?>
</p>
                    <!--shipping_estimation_total<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select"),'but_role'=>"text",'but_name'=>"dispatch[checkout.update_shipping]",'but_id'=>"but_select_shipping",'but_meta'=>"cm-dialog-closer"), 0);?>

                    </div>

                    </form>
                    <!--shipping_estimation_rates<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                <?php } else { ?>
                    <p class="ty-error-text">
                        <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                    </p>
                <?php }?>

            <?php }?>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox"&&$_smarty_tpl->tpl_vars['location']->value!="popup") {?>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
<div class="ty-estimation-buttons buttons-container" id="shipping_estimation_buttons">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="shipping_estimation"||$_REQUEST['show_shippings']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("recalculate_rates"),'but_external_click_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value),'but_role'=>"text",'but_meta'=>"ty-btn__secondary cm-external-click ty-float-right ty-estimation-buttons__rate"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select_shipping_method"),'but_external_click_id'=>"but_select_shipping",'but_meta'=>"ty-btn__secondary cm-external-click cm-dialog-closer"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("get_rates"),'but_external_click_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value),'but_meta'=>"ty-btn__secondary cm-external-click"), 0);?>

    <?php }?>
<!--shipping_estimation_buttons--></div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/shipping_estimation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/shipping_estimation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?>
    <?php $_smarty_tpl->tpl_vars["prefix"] = new Smarty_variable("sidebox_", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
    <?php $_smarty_tpl->tpl_vars["buttons_class"] = new Smarty_variable("hidden", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["buttons_class"] = new Smarty_variable("buttons-container", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["class_suffix"] = new Smarty_variable("-".((string)$_smarty_tpl->tpl_vars['additional_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable("_".((string)$_smarty_tpl->tpl_vars['additional_id']->value), null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['cart']->value) {?>
    <?php $_smarty_tpl->tpl_vars['cart'] = new Smarty_variable($_SESSION['cart'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox"&&$_smarty_tpl->tpl_vars['location']->value!="popup") {?>

<div id="est_box<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-estimation-box">
    <h3 class="ty-subheader"><?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
</h3>
<?php }?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?><?php echo "_sidebox";?><?php }
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["shipping_estimation_block_id"] = new Smarty_variable("shipping_estimation".$_tmp2.((string)$_smarty_tpl->tpl_vars['id_suffix']->value), null, 0);?>

        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->tpl_vars['countries'] = new Smarty_variable(fn_get_simple_countries(true), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['states'] = new Smarty_variable(fn_get_all_states(true), null, 0);?>
            <?php if (!Smarty::$_smarty_vars['capture']['states_built']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>$_smarty_tpl->tpl_vars['states']->value), 0);?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("states_built", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php }?>

            <form class="cm-ajax" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
estimation_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <?php if ($_smarty_tpl->tpl_vars['location']->value=="sidebox") {?><input type="hidden" name="location" value="sidebox" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?><input type="hidden" name="additional_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
,shipping_estimation_buttons,shipping_estimation_rates<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" />

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_estimation_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country'], null, 0);?>

                <?php if (!isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country'])) {?>
                    <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], null, 0);?>
                <?php }?>

                <?php if (!isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'])&&$_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']) {?>
                    <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'], null, 0);?>
                <?php }?>

                <div class="ty-control-group">
                    <label class="ty-control-group__label cm-required" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("country");?>
</label>
                    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-country cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium" name="customer_location[country]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("state");?>
</label>
                    <select class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?> ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[state]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code']==$_smarty_tpl->tpl_vars['_state']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                    <input type="text" class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']]) {?>hidden<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_d" name="customer_location[state]" size="20" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country']]) {?>disabled="disabled"<?php }?> />
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("city");?>
</label>
                    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[city]" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>

                <div class="ty-control-group">
                    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[zipcode]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("get_rates"),'but_name'=>"dispatch[checkout.shipping_estimation.get_rates]",'but_role'=>"text",'but_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value)), 0);?>

                </div>

            </form>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="shipping_estimation"||$_REQUEST['show_shippings']=="Y") {?>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']&&!$_smarty_tpl->tpl_vars['cart']->value['company_shipping_failed']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
                        <div class="ty-estimation__title"><?php echo $_smarty_tpl->__("select_shipping_method");?>
</div>
                    <?php }?>

                    <div id="shipping_estimation_rates<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <form class="cm-ajax" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_shipping_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <input type="hidden" name="redirect_mode" value="cart" />
                    <input type="hidden" name="result_ids" value="checkout_totals" />
                    <input type="hidden" name="suffix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" />

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_estimation")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                        
                        <?php if (!fn_allowed_for("ULTIMATE")||smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                            <p>
                                <strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['group']->value['name'])===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong>
                            </p>
                        <?php }?>
                        <?php if (!fn_allowed_for("ULTIMATE")||smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                            <ul>
                            <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                    <?php } else { ?>
                                        <?php echo htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </li>
                            <?php } ?>
                            </ul>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                            <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["shipping"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping"]->index++;
 $_smarty_tpl->tpl_vars["shipping"]->first = $_smarty_tpl->tpl_vars["shipping"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["estimate_group_shipping"]['first'] = $_smarty_tpl->tpl_vars["shipping"]->first;
?>
                                <?php if (!$_smarty_tpl->tpl_vars['show_only_first_shipping']->value||$_smarty_tpl->getVariable('smarty')->value['foreach']['estimate_group_shipping']['first']) {?>

                                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable("checked=\"checked\"", null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('', null, 0);?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']||$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time']) {?>
                                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable("(".((string)(($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] : $tmp)).")", null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable('', null, 0);?>
                                    <?php }?>

                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_estimation_method")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_method"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rate")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                                                    <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["inc_tax_lang"] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                                                <?php }?>
                                            <?php } elseif (fn_is_lang_var_exists("free_shipping")) {?>
                                                <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable($_smarty_tpl->__("free_shipping"), null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable('', null, 0);?>
                                            <?php }?>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <p>
                                        <input
                                            type="radio"
                                            class="ty-valign"
                                            id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                                            onclick="fn_calculate_total_shipping('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
');"
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'UTF-8');?>
 />
                                            <label for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                class="ty-valign" id="shipping_label_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->tpl_vars['rate']->value) {?> <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?>
                                            <!--shipping_label_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></label>
                                    </p>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation_method"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>
                            <?php } ?>

                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                                <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['free_shipping']) {?>
                                <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                            <?php } else { ?>
                                <p><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                            <?php }?>
                        <?php }?>

                    <?php } ?>

                    <div id="shipping_estimation_total<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <p><strong><?php echo $_smarty_tpl->__("total");?>
:</strong>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"ty-price"), 0);?>
</p>
                    <!--shipping_estimation_total<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_estimation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buttons_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select"),'but_role'=>"text",'but_name'=>"dispatch[checkout.update_shipping]",'but_id'=>"but_select_shipping",'but_meta'=>"cm-dialog-closer"), 0);?>

                    </div>

                    </form>
                    <!--shipping_estimation_rates<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                <?php } else { ?>
                    <p class="ty-error-text">
                        <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                    </p>
                <?php }?>

            <?php }?>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->tpl_vars['location']->value!="sidebox"&&$_smarty_tpl->tpl_vars['location']->value!="popup") {?>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value=="popup") {?>
<div class="ty-estimation-buttons buttons-container" id="shipping_estimation_buttons">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="shipping_estimation"||$_REQUEST['show_shippings']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("recalculate_rates"),'but_external_click_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value),'but_role'=>"text",'but_meta'=>"ty-btn__secondary cm-external-click ty-float-right ty-estimation-buttons__rate"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select_shipping_method"),'but_external_click_id'=>"but_select_shipping",'but_meta'=>"ty-btn__secondary cm-external-click cm-dialog-closer"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("get_rates"),'but_external_click_id'=>"but_get_rates_".((string)$_smarty_tpl->tpl_vars['location']->value),'but_meta'=>"ty-btn__secondary cm-external-click"), 0);?>

    <?php }?>
<!--shipping_estimation_buttons--></div>
<?php }?>
<?php }?><?php }} ?>
