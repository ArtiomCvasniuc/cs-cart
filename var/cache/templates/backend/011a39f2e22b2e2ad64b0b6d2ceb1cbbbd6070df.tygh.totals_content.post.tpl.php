<?php /* Smarty version Smarty-3.1.21, created on 2020-10-27 09:08:11
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\addons\rma\hooks\orders\totals_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14458075805f97b94b542054-19363539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '011a39f2e22b2e2ad64b0b6d2ceb1cbbbd6070df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\addons\\rma\\hooks\\orders\\totals_content.post.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14458075805f97b94b542054-19363539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f97b94b5495a4_29074365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f97b94b5495a4_29074365')) {function content_5f97b94b5495a4_29074365($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('rma_return'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['return']) {?>
    <li>
        <em><?php echo $_smarty_tpl->__("rma_return");?>
:&nbsp;</em>
        <span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['return']), 0);?>
</span>
    </li>
<?php }?><?php }} ?>
