<?php /* Smarty version Smarty-3.1.21, created on 2020-10-21 17:08:43
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\views\checkout\components\customer\title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14796101515f9040eb67e3d9-70008409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd126edaedbe8181d6b0803c0d0cfd92f43fec7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\views\\checkout\\components\\customer\\title.tpl',
      1 => 1599553798,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14796101515f9040eb67e3d9-70008409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block_title' => 0,
    'auth' => 0,
    'config' => 0,
    'return_current_url' => 0,
    'allow_multiple_profiles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9040eb6a1ba4_13804371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9040eb6a1ba4_13804371')) {function content_5f9040eb6a1ba4_13804371($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.customer_information','sign_in','create_profile','create_profile','lite_checkout.customer_information','sign_in','create_profile','create_profile'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="litecheckout__group">
    <div class="litecheckout__item litecheckout__item--fill">
        <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.customer_information") : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
    </div>

    
    <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="litecheckout__item">
            <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>"
                    data-ca-target-id="litecheckout_login_block"
                    class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"
                    rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("sign_in");?>

            </a>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['allow_multiple_profiles']->value) {?>
        <div class="litecheckout__item litecheckout__item--center">
            <a
                class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close litecheckout__link"
                href="<?php echo htmlspecialchars(fn_url("checkout.update_profile"), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-target-id="create_user_profile"
                data-ca-dialog-title="<?php echo $_smarty_tpl->__("create_profile");?>
"
            ><?php echo $_smarty_tpl->__("create_profile");?>
</a>
        </div>
    <?php }?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/title.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/title.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="litecheckout__group">
    <div class="litecheckout__item litecheckout__item--fill">
        <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.customer_information") : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
    </div>

    
    <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="litecheckout__item">
            <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>"
                    data-ca-target-id="litecheckout_login_block"
                    class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"
                    rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("sign_in");?>

            </a>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['allow_multiple_profiles']->value) {?>
        <div class="litecheckout__item litecheckout__item--center">
            <a
                class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close litecheckout__link"
                href="<?php echo htmlspecialchars(fn_url("checkout.update_profile"), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-target-id="create_user_profile"
                data-ca-dialog-title="<?php echo $_smarty_tpl->__("create_profile");?>
"
            ><?php echo $_smarty_tpl->__("create_profile");?>
</a>
        </div>
    <?php }?>
</div>
<?php }?><?php }} ?>
