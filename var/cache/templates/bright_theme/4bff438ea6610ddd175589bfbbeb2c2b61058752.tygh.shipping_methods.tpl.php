<?php /* Smarty version Smarty-3.1.21, created on 2020-10-21 17:08:41
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\blocks\lite_checkout\shipping_methods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5613032795f9040e9ca2ed3-06525832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bff438ea6610ddd175589bfbbeb2c2b61058752' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\blocks\\lite_checkout\\shipping_methods.tpl',
      1 => 1599553798,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5613032795f9040e9ca2ed3-06525832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9040e9cb5a39_30833568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9040e9cb5a39_30833568')) {function content_5f9040e9cb5a39_30833568($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="litecheckout__container">
    <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shipping_rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_form'=>true), 0);?>

    <!--litecheckout_step_shipping--></div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/shipping_methods.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/shipping_methods.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="litecheckout__container">
    <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shipping_rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_form'=>true), 0);?>

    <!--litecheckout_step_shipping--></div>
</div>
<?php }?><?php }} ?>
