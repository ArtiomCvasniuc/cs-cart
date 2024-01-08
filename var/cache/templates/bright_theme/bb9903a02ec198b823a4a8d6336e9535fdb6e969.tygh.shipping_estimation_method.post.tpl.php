<?php /* Smarty version Smarty-3.1.21, created on 2020-10-30 11:25:48
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\addons\store_locator\hooks\checkout\shipping_estimation_method.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19062952975f9bce0c3c6718-95170021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb9903a02ec198b823a4a8d6336e9535fdb6e969' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\addons\\store_locator\\hooks\\checkout\\shipping_estimation_method.post.tpl',
      1 => 1601450411,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19062952975f9bce0c3c6718-95170021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'shipping' => 0,
    'shipping_estimation_block_id' => 0,
    'group_key' => 0,
    'id_suffix' => 0,
    'cart' => 0,
    'shipping_id' => 0,
    'select_store' => 0,
    'store' => 0,
    'old_store_id' => 0,
    'store_count' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9bce0c467231_84922004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9bce0c467231_84922004')) {function content_5f9bce0c467231_84922004($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('delivery_time','delivery_time'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['shipping']->value['service_code']=='pickup') {?>
    <div class="clearfix" id="rate_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
        <div class="ty-checkout-select-store__estimation">
            <?php $_smarty_tpl->tpl_vars["store_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["old_store_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['select_store']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value], null, 0);?>

            <?php $_smarty_tpl->tpl_vars["store_locations"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                <div class="ty-one-store">
                    <input type="radio"
                    name="select_store[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1) {?>checked="checked"<?php }?>
                    id="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-one-store__radio ty-valign"
                    onclick="fn_calculate_total_shipping();"
                    data-ca-pickup-select-store="true"
                    data-ca-shipping-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-location-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-one-store__label">
                        <label for="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-valign"  >
                            <span class="ty-one-store__name">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);?>
)<?php }?>
                            </span>
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>
                                <span class="mutted">
                                    <br/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');?>

                                </span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['delivery_time']) {?>
                                <span class="mutted">
                                    <br/><?php echo $_smarty_tpl->__("delivery_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>

                                </span>
                            <?php }?>
                        </label>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php }?>
    <!--rate_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/checkout/shipping_estimation_method.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/checkout/shipping_estimation_method.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['shipping']->value['service_code']=='pickup') {?>
    <div class="clearfix" id="rate_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
        <div class="ty-checkout-select-store__estimation">
            <?php $_smarty_tpl->tpl_vars["store_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["old_store_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['select_store']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value], null, 0);?>

            <?php $_smarty_tpl->tpl_vars["store_locations"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                <div class="ty-one-store">
                    <input type="radio"
                    name="select_store[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1) {?>checked="checked"<?php }?>
                    id="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-one-store__radio ty-valign"
                    onclick="fn_calculate_total_shipping();"
                    data-ca-pickup-select-store="true"
                    data-ca-shipping-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-location-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-one-store__label">
                        <label for="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-valign"  >
                            <span class="ty-one-store__name">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);?>
)<?php }?>
                            </span>
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>
                                <span class="mutted">
                                    <br/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');?>

                                </span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['delivery_time']) {?>
                                <span class="mutted">
                                    <br/><?php echo $_smarty_tpl->__("delivery_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>

                                </span>
                            <?php }?>
                        </label>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php }?>
    <!--rate_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_estimation_block_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>

<?php }?><?php }} ?>
