<?php /* Smarty version Smarty-3.1.21, created on 2020-10-21 17:08:43
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\views\checkout\components\steps\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3488394985f9040eb9b2018-03775284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '427baf304d16557ba087a425ab4961f726af1be2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\views\\checkout\\components\\steps\\payment.tpl',
      1 => 1599553798,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3488394985f9040eb9b2018-03775284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_title' => 0,
    'cart' => 0,
    'payment_methods' => 0,
    'order_id' => 0,
    'auth' => 0,
    'iframe_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9040eb9c7fc9_29755712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9040eb9c7fc9_29755712')) {function content_5f9040eb9c7fc9_29755712($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="litecheckout__step litecheckout__container" id="litecheckout_step_payment">
    <div class="litecheckout__section">
        <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__('block_payment_methods');?>
</h2>
                </div>
            </div>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>$_smarty_tpl->tpl_vars['cart']->value['payment_id'],'payment_methods'=>$_smarty_tpl->tpl_vars['payment_methods']->value,'order_id'=>$_smarty_tpl->tpl_vars['order_id']->value,'auth'=>$_smarty_tpl->tpl_vars['auth']->value,'iframe_mode'=>(($tmp = @$_smarty_tpl->tpl_vars['iframe_mode']->value)===null||$tmp==='' ? false : $tmp)), 0);?>

    </div>
<!--litecheckout_step_payment--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/steps/payment.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/steps/payment.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="litecheckout__step litecheckout__container" id="litecheckout_step_payment">
    <div class="litecheckout__section">
        <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__('block_payment_methods');?>
</h2>
                </div>
            </div>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>$_smarty_tpl->tpl_vars['cart']->value['payment_id'],'payment_methods'=>$_smarty_tpl->tpl_vars['payment_methods']->value,'order_id'=>$_smarty_tpl->tpl_vars['order_id']->value,'auth'=>$_smarty_tpl->tpl_vars['auth']->value,'iframe_mode'=>(($tmp = @$_smarty_tpl->tpl_vars['iframe_mode']->value)===null||$tmp==='' ? false : $tmp)), 0);?>

    </div>
<!--litecheckout_step_payment--></div>
<?php }?><?php }} ?>
