<?php /* Smarty version Smarty-3.1.21, created on 2020-10-28 11:19:47
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\addons\vendor_plans\hooks\profile_fields\field_type_description.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20747710465f9929a3919c29-47737941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd40660aafac93321eeca15449fcecd04dd0468a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\profile_fields\\field_type_description.post.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20747710465f9929a3919c29-47737941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9929a392aa49_61352007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9929a392aa49_61352007')) {function content_5f9929a392aa49_61352007($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>
    <?php echo $_smarty_tpl->__("vendor_plan");?>

<?php }?>
<?php }} ?>
