<?php /* Smarty version Smarty-3.1.21, created on 2020-10-28 13:03:16
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\views\checkout\components\checkout_totals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6519497155f9941e415e4f7-25740975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db666cd505f991e14edc3c0417e1c8c489505b80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\views\\checkout\\components\\checkout_totals.tpl',
      1 => 1599553798,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6519497155f9941e415e4f7-25740975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location' => 0,
    'cart' => 0,
    'settings' => 0,
    'cart_products' => 0,
    '_total' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9941e41959d6_99024241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9941e41959d6_99024241')) {function content_5f9941e41959d6_99024241($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('calculate_shipping_cost','change','calculate','calculate_shipping_cost','total_cost','calculate_shipping_cost','change','calculate','calculate_shipping_cost','total_cost'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['location']->value=="cart"&&$_smarty_tpl->tpl_vars['cart']->value['shipping_required']==true&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("shipping_estimation", null, null); ob_start(); ?>
        <i class="ty-cart-total__icon-estimation ty-icon-flight"></i><a id="opener_shipping_estimation_block" class="cm-dialog-opener cm-dialog-auto-size ty-cart-total__a-estimation" data-ca-target-id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
" href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {
echo $_smarty_tpl->__("change");
} else {
echo $_smarty_tpl->__("calculate");
}?></a>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <div class="hidden" id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
">
        <div class="ty-cart-content__estimation">
            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"popup",'result_ids'=>"shipping_estimation_link"), 0);?>

        </div>
    </div>
<?php }?>
<div class="ty-cart-total">
    <div class="ty-cart-total__wrapper clearfix" id="checkout_totals">
        <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
            <div class="ty-coupons__container">
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
        <?php }?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_totals_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="clearfix"></div>
        <ul class="ty-cart-statistic__total-list">
            <li class="ty-cart-statistic__item ty-cart-statistic__total">
                <span class="ty-cart-statistic__total-title"><?php echo $_smarty_tpl->__("total_cost");?>
</span>
                <span class="ty-cart-statistic__total-value">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['_total']->value)===null||$tmp==='' ? Smarty::$_smarty_vars['capture']['_total'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] : $tmp),'span_id'=>"cart_total",'class'=>"ty-price"), 0);?>

                </span>
            </li>
        </ul>
    <!--checkout_totals--></div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/checkout_totals.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/checkout_totals.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['location']->value=="cart"&&$_smarty_tpl->tpl_vars['cart']->value['shipping_required']==true&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("shipping_estimation", null, null); ob_start(); ?>
        <i class="ty-cart-total__icon-estimation ty-icon-flight"></i><a id="opener_shipping_estimation_block" class="cm-dialog-opener cm-dialog-auto-size ty-cart-total__a-estimation" data-ca-target-id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
" href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {
echo $_smarty_tpl->__("change");
} else {
echo $_smarty_tpl->__("calculate");
}?></a>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <div class="hidden" id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
">
        <div class="ty-cart-content__estimation">
            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"popup",'result_ids'=>"shipping_estimation_link"), 0);?>

        </div>
    </div>
<?php }?>
<div class="ty-cart-total">
    <div class="ty-cart-total__wrapper clearfix" id="checkout_totals">
        <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
            <div class="ty-coupons__container">
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
        <?php }?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_totals_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="clearfix"></div>
        <ul class="ty-cart-statistic__total-list">
            <li class="ty-cart-statistic__item ty-cart-statistic__total">
                <span class="ty-cart-statistic__total-title"><?php echo $_smarty_tpl->__("total_cost");?>
</span>
                <span class="ty-cart-statistic__total-value">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['_total']->value)===null||$tmp==='' ? Smarty::$_smarty_vars['capture']['_total'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] : $tmp),'span_id'=>"cart_total",'class'=>"ty-price"), 0);?>

                </span>
            </li>
        </ul>
    <!--checkout_totals--></div>
</div>
<?php }?><?php }} ?>
