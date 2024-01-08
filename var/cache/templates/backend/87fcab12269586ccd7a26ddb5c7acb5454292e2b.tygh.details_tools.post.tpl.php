<?php /* Smarty version Smarty-3.1.21, created on 2020-10-27 09:08:14
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\addons\rma\hooks\orders\details_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4524202645f97b94e1023d1-13803657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fcab12269586ccd7a26ddb5c7acb5454292e2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\addons\\rma\\hooks\\orders\\details_tools.post.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4524202645f97b94e1023d1-13803657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f97b94e109dd2_86900774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f97b94e109dd2_86900774')) {function content_5f97b94e109dd2_86900774($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('return_registration','order_returns'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['allow_return']) {?>
    <li><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("return_registration"),'but_href'=>"rma.create_return?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_role'=>"tool"), 0);?>
</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['isset_returns']) {?>
    <li><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("order_returns"),'but_href'=>"rma.returns?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_role'=>"tool"), 0);?>
</li>
<?php }?><?php }} ?>
