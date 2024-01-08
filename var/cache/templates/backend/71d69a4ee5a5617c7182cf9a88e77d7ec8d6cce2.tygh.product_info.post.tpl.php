<?php /* Smarty version Smarty-3.1.21, created on 2020-10-27 09:08:10
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\addons\rma\hooks\orders\product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8615858025f97b94aaaf9e3-07658429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d69a4ee5a5617c7182cf9a88e77d7ec8d6cce2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\addons\\rma\\hooks\\orders\\product_info.post.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8615858025f97b94aaaf9e3-07658429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'return_statuses' => 0,
    'key' => 0,
    'status' => 0,
    'amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f97b94aaca9b9_27591864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f97b94aaca9b9_27591864')) {function content_5f97b94aaca9b9_27591864($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','collapse_sublist_of_items','returns_info','status','quantity','status','quantity'));
?>
<?php if ($_smarty_tpl->tpl_vars['oi']->value['returns_info']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['return_statuses']->value) {
$_smarty_tpl->tpl_vars["return_statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_RETURN')), null, 0);
}?>

    <p class="shift-top">
        <i title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination icon-caret-right"></i>
        <i title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand hidden cm-combination icon-caret-down"></i>
        <a id="sw_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination"><?php echo $_smarty_tpl->__("returns_info");?>
</a>
    </p>
    <div class="table-responsive-wrapper">
        <table width="100%" class="table table-condensed table-no-bg table--relative table-responsive hidden" id="ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <thead>
        <tr>
            <th>&nbsp;<?php echo $_smarty_tpl->__("status");?>
</th>
            <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
        </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oi']->value['returns_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
            <tr>
                <td data-th="<?php echo $_smarty_tpl->__("status");?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['return_statuses']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
<?php }?>
<?php }} ?>
