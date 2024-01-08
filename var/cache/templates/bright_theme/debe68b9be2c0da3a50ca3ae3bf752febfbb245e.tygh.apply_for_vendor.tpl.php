<?php /* Smarty version Smarty-3.1.21, created on 2020-10-28 12:10:54
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\views\companies\apply_for_vendor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20715546745f99359e8492b0-98639648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'debe68b9be2c0da3a50ca3ae3bf752febfbb245e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\views\\companies\\apply_for_vendor.tpl',
      1 => 1600247357,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20715546745f99359e8492b0-98639648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'invitation_key' => 0,
    'company_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f99359e8d9f71_19827524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f99359e8d9f71_19827524')) {function content_5f99359e8d9f71_19827524($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('apply_for_vendor_account','submit','apply_for_vendor_account','submit'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendors:apply_page")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendors:apply_page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ty-company-fields">
    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <h1 class="ty-mainbox-title"><?php echo $_smarty_tpl->__("apply_for_vendor_account");?>
</h1>

    <div id="apply_for_vendor_account" >

        <form action="<?php echo htmlspecialchars(fn_url("companies.apply_for_vendor"), ENT_QUOTES, 'UTF-8');?>
" method="post" name="apply_for_vendor_form">
            <?php if ($_smarty_tpl->tpl_vars['invitation_key']->value) {?>
                <input type="hidden" name="company_data[invitation_key]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invitation_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendors:apply_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendors:apply_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>"C",'nothing_extra'=>"Y",'default_data_name'=>"company_data",'profile_data'=>$_smarty_tpl->tpl_vars['company_data']->value), 0);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendors:apply_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendors:apply_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendors:apply_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <input type="hidden" name="company_data[lang_code]" value="<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendors:apply_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"apply_for_vendor_account",'align'=>"left"), 0);?>


            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("submit"),'but_name'=>"dispatch[companies.apply_for_vendor]",'but_id'=>"but_apply_for_vendor",'but_meta'=>"ty-btn__primary"), 0);?>

            </div>
        </form>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendors:apply_page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/apply_for_vendor.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/apply_for_vendor.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendors:apply_page")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendors:apply_page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ty-company-fields">
    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <h1 class="ty-mainbox-title"><?php echo $_smarty_tpl->__("apply_for_vendor_account");?>
</h1>

    <div id="apply_for_vendor_account" >

        <form action="<?php echo htmlspecialchars(fn_url("companies.apply_for_vendor"), ENT_QUOTES, 'UTF-8');?>
" method="post" name="apply_for_vendor_form">
            <?php if ($_smarty_tpl->tpl_vars['invitation_key']->value) {?>
                <input type="hidden" name="company_data[invitation_key]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invitation_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendors:apply_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendors:apply_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>"C",'nothing_extra'=>"Y",'default_data_name'=>"company_data",'profile_data'=>$_smarty_tpl->tpl_vars['company_data']->value), 0);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendors:apply_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendors:apply_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendors:apply_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <input type="hidden" name="company_data[lang_code]" value="<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendors:apply_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"apply_for_vendor_account",'align'=>"left"), 0);?>


            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("submit"),'but_name'=>"dispatch[companies.apply_for_vendor]",'but_id'=>"but_apply_for_vendor",'but_meta'=>"ty-btn__primary"), 0);?>

            </div>
        </form>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendors:apply_page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
