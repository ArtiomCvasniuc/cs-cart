<?php /* Smarty version Smarty-3.1.21, created on 2020-10-26 13:23:41
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\buttons\add_to_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21027001495f96a3ad2c8e38-38953530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaa24a31e916ed35309a84c70ce5bcbf5e51670c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\buttons\\add_to_cart.tpl',
      1 => 1603108753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21027001495f96a3ad2c8e38-38953530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'product' => 0,
    'vendor_id' => 0,
    'auth' => 0,
    'show_price' => 0,
    'settings' => 0,
    'but_id' => 0,
    'but_text' => 0,
    'but_name' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_target' => 0,
    'but_role' => 0,
    'c_url' => 0,
    'login_url' => 0,
    'show_buy_now' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f96a3ad32e955_62476106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f96a3ad32e955_62476106')) {function content_5f96a3ad32e955_62476106($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','sign_in_to_buy','text_login_to_add_to_cart','login_required','add_to_cart','sign_in_to_buy','text_login_to_add_to_cart','add_to_cart','sign_in_to_buy','text_login_to_add_to_cart','login_required','add_to_cart','sign_in_to_buy','text_login_to_add_to_cart'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"buttons:add_to_cart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    
    <?php $_smarty_tpl->tpl_vars["vendor_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['company_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(fn_is_necessary_to_show_price($_smarty_tpl->tpl_vars['vendor_id']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']=='') {?>
        <?php if ($_smarty_tpl->tpl_vars['show_price']->value=='off') {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="allow_shopping"||$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") : $tmp),'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_meta'=>"ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer"), 0);?>

            <?php } else { ?>

                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?>
                    <?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_variable("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value), null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("sign_in_to_buy"),'but_href'=>$_smarty_tpl->tpl_vars['login_url']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_name'=>''), 0);?>

                <p><?php echo $_smarty_tpl->__("text_login_to_add_to_cart");?>
</p>
            <?php }?>
        <?php } else { ?>
            <a data-ca-target-id="login_block4" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow">
                <?php echo $_smarty_tpl->__("login_required");?>

            </a>
        <?php }?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="allow_shopping"||$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") : $tmp),'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_meta'=>"ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer"), 0);?>

        <?php } else { ?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?>
                <?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_variable("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value), null, 0);?>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("sign_in_to_buy"),'but_href'=>$_smarty_tpl->tpl_vars['login_url']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_name'=>''), 0);?>

            <p><?php echo $_smarty_tpl->__("text_login_to_add_to_cart");?>
</p>
        <?php }?>
    <?php }?>
    
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->tpl_vars['show_buy_now'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_buy_now']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_buy_now'] = clone $_smarty_tpl->tpl_vars['show_buy_now'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/add_to_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/add_to_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"buttons:add_to_cart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    
    <?php $_smarty_tpl->tpl_vars["vendor_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['company_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(fn_is_necessary_to_show_price($_smarty_tpl->tpl_vars['vendor_id']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']=='') {?>
        <?php if ($_smarty_tpl->tpl_vars['show_price']->value=='off') {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="allow_shopping"||$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") : $tmp),'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_meta'=>"ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer"), 0);?>

            <?php } else { ?>

                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?>
                    <?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_variable("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value), null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("sign_in_to_buy"),'but_href'=>$_smarty_tpl->tpl_vars['login_url']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_name'=>''), 0);?>

                <p><?php echo $_smarty_tpl->__("text_login_to_add_to_cart");?>
</p>
            <?php }?>
        <?php } else { ?>
            <a data-ca-target-id="login_block4" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow">
                <?php echo $_smarty_tpl->__("login_required");?>

            </a>
        <?php }?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="allow_shopping"||$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") : $tmp),'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_meta'=>"ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer"), 0);?>

        <?php } else { ?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?>
                <?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_variable("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value), null, 0);?>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("sign_in_to_buy"),'but_href'=>$_smarty_tpl->tpl_vars['login_url']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "text" : $tmp),'but_name'=>''), 0);?>

            <p><?php echo $_smarty_tpl->__("text_login_to_add_to_cart");?>
</p>
        <?php }?>
    <?php }?>
    
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"buttons:add_to_cart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->tpl_vars['show_buy_now'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_buy_now']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_buy_now'] = clone $_smarty_tpl->tpl_vars['show_buy_now'];?>
<?php }?><?php }} ?>
