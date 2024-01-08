<?php /* Smarty version Smarty-3.1.21, created on 2020-10-21 17:08:48
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\views\auth\components\login_errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13251531465f9040f022a041-04765102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515fdfc207db4ba39c8c5fa8e097e916b03287c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\views\\auth\\components\\login_errors.tpl',
      1 => 1599553798,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13251531465f9040f022a041-04765102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'error_container_id' => 0,
    'id' => 0,
    'login_error' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9040f023fab8_17132771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9040f023fab8_17132771')) {function content_5f9040f023fab8_17132771($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('error_incorrect_login','error_incorrect_login'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['error_container_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['error_container_id']->value)===null||$tmp==='' ? "login_error_".((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), null, 0);?>

<div class="ty-login-form__wrong-credentials-container" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_container_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['login_error']->value) {?>
        <span class="ty-login-form__wrong-credentials-text ty-error-text"><?php echo $_smarty_tpl->__("error_incorrect_login");?>
</span>
    <?php }?>
<!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_container_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/auth/components/login_errors.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/auth/components/login_errors.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['error_container_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['error_container_id']->value)===null||$tmp==='' ? "login_error_".((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), null, 0);?>

<div class="ty-login-form__wrong-credentials-container" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_container_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['login_error']->value) {?>
        <span class="ty-login-form__wrong-credentials-text ty-error-text"><?php echo $_smarty_tpl->__("error_incorrect_login");?>
</span>
    <?php }?>
<!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_container_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?><?php }} ?>
