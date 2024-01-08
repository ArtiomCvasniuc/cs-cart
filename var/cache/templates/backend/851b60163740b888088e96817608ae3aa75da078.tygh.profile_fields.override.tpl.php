<?php /* Smarty version Smarty-3.1.21, created on 2020-10-22 07:56:29
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\addons\vendor_plans\hooks\profiles\profile_fields.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18198443415f9110fd43c4b9-40555563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '851b60163740b888088e96817608ae3aa75da078' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\profiles\\profile_fields.override.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18198443415f9110fd43c4b9-40555563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9110fd44bb88_87748543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9110fd44bb88_87748543')) {function content_5f9110fd44bb88_87748543($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>
    <!--hide vendor plan field in admin area-->
<?php }?>
<?php }} ?>
