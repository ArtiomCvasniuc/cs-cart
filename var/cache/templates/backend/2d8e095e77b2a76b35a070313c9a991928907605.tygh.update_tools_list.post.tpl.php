<?php /* Smarty version Smarty-3.1.21, created on 2020-10-28 08:13:54
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\addons\gift_certificates\hooks\profiles\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4715195825f98fe12bf0cf3-75315793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8e095e77b2a76b35a070313c9a991928907605' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\profiles\\update_tools_list.post.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4715195825f98fe12bf0cf3-75315793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f98fe12c02f73_29800683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f98fe12c02f73_29800683')) {function content_5f98fe12c02f73_29800683($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('create_gift_certificate_for_customer'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C"&&fn_check_view_permissions("gift_certificates.add")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }?>
<?php }} ?>
