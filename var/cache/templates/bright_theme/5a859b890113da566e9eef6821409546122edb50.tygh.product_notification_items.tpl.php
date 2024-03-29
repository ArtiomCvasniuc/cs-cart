<?php /* Smarty version Smarty-3.1.21, created on 2020-10-26 13:23:54
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\views\products\components\product_notification_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15896139725f96a3ba6a7e34-05910052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a859b890113da566e9eef6821409546122edb50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\views\\products\\components\\product_notification_items.tpl',
      1 => 1603102638,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15896139725f96a3ba6a7e34-05910052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'added_products' => 0,
    'product' => 0,
    'product_id' => 0,
    'company' => 0,
    'vendor_id' => 0,
    'settings' => 0,
    'auth' => 0,
    'show_price' => 0,
    'hide_amount' => 0,
    'key' => 0,
    'empty_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f96a3ba7028d0_96291169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f96a3ba7028d0_96291169')) {function content_5f96a3ba7028d0_96291169($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:notification_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:notification_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['added_products']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['added_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars['product']->key;
?>     

            <?php $_smarty_tpl->tpl_vars["product_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["company"] = new Smarty_variable(fn_get_company_by_product_id($_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
            
            <?php $_smarty_tpl->tpl_vars["vendor_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['company_id'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(fn_is_necessary_to_show_price($_smarty_tpl->tpl_vars['vendor_id']->value), null, 0);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:notification_product")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:notification_product"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="ty-product-notification__item clearfix">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"50",'image_height'=>"50",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true,'class'=>"ty-product-notification__image"), 0);?>

                <div class="ty-product-notification__content clearfix">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']);?>
</a>
                    <?php if (!($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="hide_price_and_add_to_cart"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']=='') {?>
                            <?php if ($_smarty_tpl->tpl_vars['show_price']->value=='off') {?>
                                <div class="ty-product-notification__price">
                                    <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
                                        <span class="none"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;x&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>

                                    <?php }?>
                                </div>
                            <?php }?>
                        <?php } else { ?>
                            <div class="ty-product-notification__price">
                                <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
                                    <span class="none"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;x&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>

                                <?php }?>
                            </div>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_option_data']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_option_data']), 0);?>

                    <?php }?>
                </div>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:notification_product"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } ?>
    <?php } else { ?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['empty_text']->value, ENT_QUOTES, 'UTF-8');?>

    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:notification_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_notification_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_notification_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:notification_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:notification_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['added_products']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['added_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars['product']->key;
?>     

            <?php $_smarty_tpl->tpl_vars["product_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["company"] = new Smarty_variable(fn_get_company_by_product_id($_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
            
            <?php $_smarty_tpl->tpl_vars["vendor_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['company_id'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(fn_is_necessary_to_show_price($_smarty_tpl->tpl_vars['vendor_id']->value), null, 0);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:notification_product")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:notification_product"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="ty-product-notification__item clearfix">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"50",'image_height'=>"50",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true,'class'=>"ty-product-notification__image"), 0);?>

                <div class="ty-product-notification__content clearfix">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']);?>
</a>
                    <?php if (!($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="hide_price_and_add_to_cart"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']=='') {?>
                            <?php if ($_smarty_tpl->tpl_vars['show_price']->value=='off') {?>
                                <div class="ty-product-notification__price">
                                    <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
                                        <span class="none"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;x&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>

                                    <?php }?>
                                </div>
                            <?php }?>
                        <?php } else { ?>
                            <div class="ty-product-notification__price">
                                <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
                                    <span class="none"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;x&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>

                                <?php }?>
                            </div>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_option_data']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_option_data']), 0);?>

                    <?php }?>
                </div>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:notification_product"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } ?>
    <?php } else { ?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['empty_text']->value, ENT_QUOTES, 'UTF-8');?>

    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:notification_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
