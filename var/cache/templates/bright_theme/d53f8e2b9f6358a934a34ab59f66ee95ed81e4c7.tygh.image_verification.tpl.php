<?php /* Smarty version Smarty-3.1.21, created on 2020-10-21 17:08:48
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\addons\recaptcha\overrides\common\image_verification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7331391555f9040f02513f1-84446749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53f8e2b9f6358a934a34ab59f66ee95ed81e4c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\addons\\recaptcha\\overrides\\common\\image_verification.tpl',
      1 => 1601450411,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7331391555f9040f02513f1-84446749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'option' => 0,
    'app' => 0,
    'id' => 0,
    'full_width' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9040f02783b5_82449986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9040f02783b5_82449986')) {function content_5f9040f02783b5_82449986($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('image_verification_label','image_verification_label','image_verification_label','image_verification_label','image_verification_label','image_verification_label'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (fn_needs_image_verification($_smarty_tpl->tpl_vars['option']->value)) {?>
    <?php if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver())=="Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
        <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(uniqid("recaptcha_"), null, 0);?>
        <div class="captcha ty-control-group">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-recaptcha ty-captcha__label"><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-recaptcha"></div>
        </div>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(uniqid("recaptcha_"), null, 0);?>
        <div class="native-captcha<?php if (!$_smarty_tpl->tpl_vars['full_width']->value) {?> native-captcha--short<?php }?>">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="cm-required ty-captcha__label"
            ><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
            <div class="native-captcha__image-container">
                <img src="<?php echo htmlspecialchars($_SESSION['native_captcha']['image'], ENT_QUOTES, 'UTF-8');?>
"
                     class="native-captcha__image"
                />
            </div>
            <input type="text"
                   id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   class="input-text native-captcha__answer form-control"
                   name="native_captcha_response"
                   autocomplete="off"
                   placeholder="<?php echo $_smarty_tpl->__("image_verification_label");?>
"
            >
        </div>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="C:/xampp/htdocs/test-ro/design/themes/responsive/templates/addons/recaptcha/overrides/common/image_verification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"C:/xampp/htdocs/test-ro/design/themes/responsive/templates/addons/recaptcha/overrides/common/image_verification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (fn_needs_image_verification($_smarty_tpl->tpl_vars['option']->value)) {?>
    <?php if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver())=="Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
        <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(uniqid("recaptcha_"), null, 0);?>
        <div class="captcha ty-control-group">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-recaptcha ty-captcha__label"><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-recaptcha"></div>
        </div>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(uniqid("recaptcha_"), null, 0);?>
        <div class="native-captcha<?php if (!$_smarty_tpl->tpl_vars['full_width']->value) {?> native-captcha--short<?php }?>">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="cm-required ty-captcha__label"
            ><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
            <div class="native-captcha__image-container">
                <img src="<?php echo htmlspecialchars($_SESSION['native_captcha']['image'], ENT_QUOTES, 'UTF-8');?>
"
                     class="native-captcha__image"
                />
            </div>
            <input type="text"
                   id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   class="input-text native-captcha__answer form-control"
                   name="native_captcha_response"
                   autocomplete="off"
                   placeholder="<?php echo $_smarty_tpl->__("image_verification_label");?>
"
            >
        </div>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
