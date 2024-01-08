<?php /* Smarty version Smarty-3.1.21, created on 2020-10-28 11:25:20
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\addons\vendor_plans\hooks\profile_fields\field_types.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2592520925f992af0c7eb51-36174982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5a6445c1494a1894dc18485b1403283a31fa243' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\profile_fields\\field_types.post.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2592520925f992af0c7eb51-36174982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile_type' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f992af0c95618_66539472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f992af0c95618_66539472')) {function content_5f992af0c95618_66539472($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['profile_type']->value==smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
    <option value="<?php echo htmlspecialchars(@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_plan");?>
</option>
<?php }?>
<?php }} ?>
