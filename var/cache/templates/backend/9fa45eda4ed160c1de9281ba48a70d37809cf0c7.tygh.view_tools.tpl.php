<?php /* Smarty version Smarty-3.1.21, created on 2020-10-27 09:08:13
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\common\view_tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16552602465f97b94dd646b5-67506950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa45eda4ed160c1de9281ba48a70d37809cf0c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\common\\view_tools.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16552602465f97b94dd646b5-67506950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_tools' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f97b94dd77394_35643429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f97b94dd77394_35643429')) {function content_5f97b94dd77394_35643429($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next'));
?>
<div class="btn-group prev-next">
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['prev_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("prev_page");
}?>"<?php }?>><i class="icon-chevron-left"></i></a>
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['next_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("next");
}?>"<?php }?>> <i class="icon-chevron-right"></i> </a>
</div><?php }} ?>
