<?php /* Smarty version Smarty-3.1.21, created on 2020-10-28 08:13:53
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\views\profiles\components\products_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4645818665f98fe11b80308-82147935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8102b0ea67632032548883d3282d1543d90a2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\views\\profiles\\components\\products_settings.tpl',
      1 => 1603102303,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4645818665f98fe11b80308-82147935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nothing_extra' => 0,
    'title' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f98fe11b90491_50039890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f98fe11b90491_50039890')) {function content_5f98fe11b90491_50039890($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('show_product_price_only_for_auth_users'));
?>

<?php if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<div class="control-group profile-field-show_product_price_only_for_auth_users">
    <label class="control-label cm-profile-field"><?php echo $_smarty_tpl->__("show_product_price_only_for_auth_users");?>
:</label>
    <div class="controls">      
        <input type="checkbox" id="show_product_price_only_for_auth_users" name="user_data[show_product_price_only_for_auth_users]" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['show_product_price_only_for_auth_users']=='on') {?> checked <?php }?>>
    </div>
</div><?php }} ?>
