<?php /* Smarty version Smarty-3.1.21, created on 2020-10-26 13:47:56
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\addons\rma\hooks\orders\details.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2358282695f96a95c3b4191-08828224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2ff64b731c875f207ee39d6885c87de4caf5a4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\addons\\rma\\hooks\\orders\\details.post.tpl',
      1 => 1601450411,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2358282695f96a95c3b4191-08828224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f96a95c3ee7a1_87167599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f96a95c3ee7a1_87167599')) {function content_5f96a95c3ee7a1_87167599($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sku','returned_product','quantity','subtotal','free','sku','returned_product','quantity','subtotal','free'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['order_info']->value['returned_products']) {?>
<table class="ty-table">
    <tr>
        <th><?php echo $_smarty_tpl->__("sku");?>
</th>
        <th><?php echo $_smarty_tpl->__("returned_product");?>
</th>
        <th style="width: 5%" class="ty-center"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        <th style="width: 7%" class="ty-center"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['returned_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
    <tr>
        <td>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td>
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="manage-root-item"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_details")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_details"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options']), 0);?>

                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_details"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td class="ty-right"><strong><?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['subtotal']), 0);
}?></strong></td>
    </tr>
    <?php } ?>
</table>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/hooks/orders/details.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/hooks/orders/details.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['order_info']->value['returned_products']) {?>
<table class="ty-table">
    <tr>
        <th><?php echo $_smarty_tpl->__("sku");?>
</th>
        <th><?php echo $_smarty_tpl->__("returned_product");?>
</th>
        <th style="width: 5%" class="ty-center"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        <th style="width: 7%" class="ty-center"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['returned_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
    <tr>
        <td>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td>
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="manage-root-item"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_details")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_details"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options']), 0);?>

                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_details"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td class="ty-right"><strong><?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['subtotal']), 0);
}?></strong></td>
    </tr>
    <?php } ?>
</table>
<?php }
}?><?php }} ?>
