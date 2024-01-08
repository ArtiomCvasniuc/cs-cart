<?php /* Smarty version Smarty-3.1.21, created on 2020-10-21 17:08:43
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\addons\store_locator\hooks\checkout\shipping_method.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13860008275f9040eb5d5009-12780201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed8e5fbd373a38dfc1ffc5d6f2f16104a49cf75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\addons\\store_locator\\hooks\\checkout\\shipping_method.post.tpl',
      1 => 1601450411,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13860008275f9040eb5d5009-12780201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'group_key' => 0,
    'cart' => 0,
    'shipping' => 0,
    'shipping_id' => 0,
    'select_store' => 0,
    'display_type' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9040eb624551_94238687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9040eb624551_94238687')) {function content_5f9040eb624551_94238687($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.select_pickup_item','lite_checkout.select_pickup_item'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']&&$_smarty_tpl->tpl_vars['shipping']->value['module']=="store_locator") {?>

    <?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['store_count'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['shipping_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['old_store_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['select_store']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']) {?>
        <?php $_smarty_tpl->tpl_vars['display_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display'], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['display_type'] = new Smarty_variable("ML", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['store_locations'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['display_type']->value!="L") {?>
        <?php $_smarty_tpl->tpl_vars['display_pickup_map'] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <div class="litecheckout__item">
        <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__("lite_checkout.select_pickup_item");?>
</h2>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:store_locator_pickup_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:store_locator_pickup_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/store_locator/views/checkout/components/shippings/list_pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:store_locator_pickup_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/checkout/shipping_method.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/checkout/shipping_method.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']&&$_smarty_tpl->tpl_vars['shipping']->value['module']=="store_locator") {?>

    <?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['store_count'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['shipping_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['old_store_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['select_store']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']) {?>
        <?php $_smarty_tpl->tpl_vars['display_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display'], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['display_type'] = new Smarty_variable("ML", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['store_locations'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['display_type']->value!="L") {?>
        <?php $_smarty_tpl->tpl_vars['display_pickup_map'] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <div class="litecheckout__item">
        <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__("lite_checkout.select_pickup_item");?>
</h2>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:store_locator_pickup_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:store_locator_pickup_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/store_locator/views/checkout/components/shippings/list_pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:store_locator_pickup_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }?><?php }} ?>
