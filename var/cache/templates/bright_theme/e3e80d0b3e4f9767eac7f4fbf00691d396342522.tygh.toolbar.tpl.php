<?php /* Smarty version Smarty-3.1.21, created on 2020-11-04 16:25:21
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\common\toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16538259855fa2abc118c5c0-93426476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e80d0b3e4f9767eac7f4fbf00691d396342522' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\common\\toolbar.tpl',
      1 => 1599553798,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16538259855fa2abc118c5c0-93426476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'config' => 0,
    'title' => 0,
    'href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fa2abc120a941_56579649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa2abc120a941_56579649')) {function content_5fa2abc120a941_56579649($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('close','close'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-top-panel"><div id="minimize_block" class="ty-top-panel__wrapper"><div class="ty-top-panel__header"><div class="ty-top-panel__logo"><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?><a href="<?php if (fn_allowed_for("ULTIMATE")) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['origin_http_location'], ENT_QUOTES, 'UTF-8');?>
/<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['admin_index'], ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel__logo-link"><?php }?><i class="ty-top-panel__icon-basket ty-icon-basket"></i><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?></a><?php }?></div><h4 class="ty-top-panel__title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div><div class="ty-top-panel-action"><span class="ty-top-panel-action_item"><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel-btn cm-no-ajax cm-post"><?php echo $_smarty_tpl->__("close");?>
</a></span></div></div></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/toolbar.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/toolbar.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-top-panel"><div id="minimize_block" class="ty-top-panel__wrapper"><div class="ty-top-panel__header"><div class="ty-top-panel__logo"><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?><a href="<?php if (fn_allowed_for("ULTIMATE")) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['origin_http_location'], ENT_QUOTES, 'UTF-8');?>
/<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['admin_index'], ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel__logo-link"><?php }?><i class="ty-top-panel__icon-basket ty-icon-basket"></i><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?></a><?php }?></div><h4 class="ty-top-panel__title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div><div class="ty-top-panel-action"><span class="ty-top-panel-action_item"><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel-btn cm-no-ajax cm-post"><?php echo $_smarty_tpl->__("close");?>
</a></span></div></div></div>
<?php }?><?php }} ?>
