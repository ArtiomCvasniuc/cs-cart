<?php /* Smarty version Smarty-3.1.21, created on 2020-10-28 08:15:43
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\addons\store_locator\hooks\shippings\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15528788755f98fe7f914794-89036220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4e245fe81ab4cb2e0b788a56a38629c8924699a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\addons\\store_locator\\hooks\\shippings\\tabs_content.post.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15528788755f98fe7f914794-89036220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_store_locator_configure_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f98fe7f93e975_49504771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f98fe7f93e975_49504771')) {function content_5f98fe7f93e975_49504771($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_store_locator_configure_tab']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <input type="hidden"
           data-ca-store-locator-show-configure-tab="true"
    />
<?php }?>
<?php }} ?>
