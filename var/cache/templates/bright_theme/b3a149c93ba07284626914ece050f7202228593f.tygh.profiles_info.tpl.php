<?php /* Smarty version Smarty-3.1.21, created on 2020-10-26 13:47:51
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\views\profiles\components\profiles_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9855903145f96a95735d929-88478507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3a149c93ba07284626914ece050f7202228593f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\views\\profiles\\components\\profiles_info.tpl',
      1 => 1599553798,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9855903145f96a95735d929-88478507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location' => 0,
    'profile_fields' => 0,
    'contact_fields' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f96a95738e1e8_68236517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f96a95738e1e8_68236517')) {function content_5f96a95738e1e8_68236517($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('customer_information','billing_address','billing_address','shipping_address','shipping_address','contact_information','contact_information','customer_information','billing_address','billing_address','shipping_address','shipping_address','contact_information','contact_information'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("customer_information")), 0);?>


<?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields($_smarty_tpl->tpl_vars['location']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['contact_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['profile_fields']->value['C'], null, 0);?>

<div class="ty-profiles-info">
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <div id="tygh_order_billing_adress" class="ty-profiles-info__item ty-profiles-info__billing">
            <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("billing_address");?>
</h5>
            <div class="ty-profiles-info__field"><?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['B'],'title'=>$_smarty_tpl->__("billing_address")), 0);?>
</div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <div id="tygh_order_shipping_adress" class="ty-profiles-info__item ty-profiles-info__shipping">
            <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>
            <div class="ty-profiles-info__field"><?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S'],'title'=>$_smarty_tpl->__("shipping_address")), 0);?>
</div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_fields']->value) {?>
        <div class="ty-profiles-info__item">
            <?php $_smarty_tpl->_capture_stack[0][] = array("contact_information", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['contact_fields']->value,'title'=>$_smarty_tpl->__("contact_information")), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php if (trim(Smarty::$_smarty_vars['capture']['contact_information'])!='') {?>
                <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                <div class="ty-profiles-info__field"><?php echo Smarty::$_smarty_vars['capture']['contact_information'];?>
</div>
            <?php }?>
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/profiles_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/components/profiles_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("customer_information")), 0);?>


<?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields($_smarty_tpl->tpl_vars['location']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['contact_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['profile_fields']->value['C'], null, 0);?>

<div class="ty-profiles-info">
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <div id="tygh_order_billing_adress" class="ty-profiles-info__item ty-profiles-info__billing">
            <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("billing_address");?>
</h5>
            <div class="ty-profiles-info__field"><?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['B'],'title'=>$_smarty_tpl->__("billing_address")), 0);?>
</div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <div id="tygh_order_shipping_adress" class="ty-profiles-info__item ty-profiles-info__shipping">
            <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>
            <div class="ty-profiles-info__field"><?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S'],'title'=>$_smarty_tpl->__("shipping_address")), 0);?>
</div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_fields']->value) {?>
        <div class="ty-profiles-info__item">
            <?php $_smarty_tpl->_capture_stack[0][] = array("contact_information", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['contact_fields']->value,'title'=>$_smarty_tpl->__("contact_information")), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php if (trim(Smarty::$_smarty_vars['capture']['contact_information'])!='') {?>
                <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                <div class="ty-profiles-info__field"><?php echo Smarty::$_smarty_vars['capture']['contact_information'];?>
</div>
            <?php }?>
        </div>
    <?php }?>
</div>
<?php }?><?php }} ?>
