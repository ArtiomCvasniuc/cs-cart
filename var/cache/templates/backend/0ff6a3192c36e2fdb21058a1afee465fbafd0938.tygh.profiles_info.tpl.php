<?php /* Smarty version Smarty-3.1.21, created on 2020-10-27 09:08:13
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\views\order_management\components\profiles_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3969062375f97b94d3d45c7-90890651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ff6a3192c36e2fdb21058a1afee465fbafd0938' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\views\\order_management\\components\\profiles_info.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3969062375f97b94d3d45c7-90890651',
  'function' => 
  array (
    'profile_enter_data_link' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'profile_edit_link' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'location' => 0,
    'scroll_to' => 0,
    'is_edit' => 0,
    'click_to' => 0,
    'user_data' => 0,
    'profile_fields' => 0,
    'user_full_name' => 0,
    'email_changed' => 0,
    'form_id' => 0,
    'allow_reselect_customer' => 0,
    'users_shared_force' => 0,
    'selected' => 0,
    'customer' => 0,
    'tabindex' => 0,
    'descr_sl' => 0,
    'is_empty_user_data' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f97b94d46a7a2_65547915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f97b94d46a7a2_65547915')) {function content_5f97b94d46a7a2_65547915($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('enter_data','edit','no_data','section_is_not_completed','address_type','no_data','section_is_not_completed','ip_address','phone','fax','company','website','attention','notice_update_customer_details','update_customer_info','change_customer','advanced_customer_search','type_to_search','user_data_required','customer_information','shipping_address','billing_address','billing_address','shipping_address'));
?>
<?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields($_smarty_tpl->tpl_vars['location']->value), null, 0);?>

<?php if (!function_exists('smarty_template_function_profile_enter_data_link')) {
    function smarty_template_function_profile_enter_data_link($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['profile_enter_data_link']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div class="btn-group"><a class="btn cm-dialog-opener" data-ca-target-id="customer_info"  data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("enter_data");?>
</a></div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_profile_edit_link')) {
    function smarty_template_function_profile_edit_link($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['profile_edit_link']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if ($_smarty_tpl->tpl_vars['is_edit']->value) {?>
    <div class="pull-right">
        <a class="hand cm-tooltip icon-edit cm-dialog-opener<?php if ($_smarty_tpl->tpl_vars['click_to']->value) {?> cm-external-click<?php }?>" data-ca-target-id="customer_info" data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['click_to']->value) {?>data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['click_to']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo $_smarty_tpl->__("edit");?>
"></a>
    </div>
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php $_smarty_tpl->_capture_stack[0][] = array("billing_address", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:profile_billing_address")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:profile_billing_address"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (!fn_is_empty($_smarty_tpl->tpl_vars['user_data']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_firstname']||$_smarty_tpl->tpl_vars['user_data']->value['b_lastname']) {?>
                <p class="strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_lastname'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_address']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_address'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_address_2']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_address_2'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_city']||$_smarty_tpl->tpl_vars['user_data']->value['b_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['b_zipcode']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['user_data']->value['b_city']&&($_smarty_tpl->tpl_vars['user_data']->value['b_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['b_zipcode'])) {?>,<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_zipcode'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_country_descr']) {?><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_country_descr'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['B']), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_phone']) {?>
                <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_phone'], ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
            <?php }?>
        <?php } else { ?>
            <p class="muted"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <?php } else { ?>
        <p class="muted"><?php echo $_smarty_tpl->__("section_is_not_completed");?>
</p>
        <div class="enter-data">
            <?php smarty_template_function_profile_enter_data_link($_smarty_tpl,array('scroll_to'=>"profile_fields_b"));?>

        </div>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:profile_billing_address"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->_capture_stack[0][] = array("shipping_address", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:profile_shipping_address")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:profile_shipping_address"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (!fn_is_empty($_smarty_tpl->tpl_vars['user_data']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_firstname']||$_smarty_tpl->tpl_vars['user_data']->value['s_lastname']) {?>
                <p class="strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_lastname'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_2']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address_2'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_zipcode']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['user_data']->value['s_city']&&($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'])) {?>,<?php }?>  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']) {?><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S']), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_phone']) {?>
                <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_phone'], ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_type']) {?>
                <p><?php echo $_smarty_tpl->__("address_type");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address_type'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
        <?php } else { ?>
            <p class="muted"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <?php } else { ?>
        <p class="muted"><?php echo $_smarty_tpl->__("section_is_not_completed");?>
</p>
        <div class="enter-data">
            <?php smarty_template_function_profile_enter_data_link($_smarty_tpl,array('scroll_to'=>"profile_fields_s"));?>

        </div>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:profile_shipping_address"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php $_smarty_tpl->_capture_stack[0][] = array("customer_information", null, null); ob_start(); ?>
    <?php if (!fn_is_empty($_smarty_tpl->tpl_vars['user_data']->value)) {?>
        <p class="strong">
            <?php $_smarty_tpl->tpl_vars['user_full_name'] = new Smarty_variable(trim(((string)$_smarty_tpl->tpl_vars['user_data']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value['lastname'])), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['user_full_name']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_full_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>,
                <?php } elseif ($_smarty_tpl->tpl_vars['user_full_name']->value) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_full_name']->value, ENT_QUOTES, 'UTF-8');?>
,
                <?php }?>
            <?php }?>
            <a class="profile-info__email" href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
        </p>

        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ip_address']) {?>
            <span><?php echo $_smarty_tpl->__("ip_address");?>
:</span>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
        <div class="clear">
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['phone']) {?>
                <span><?php echo $_smarty_tpl->__("phone");?>
:</span>
                <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['fax']) {?>
                <span><?php echo $_smarty_tpl->__("fax");?>
:</span>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['company']) {?>
                <span><?php echo $_smarty_tpl->__("company");?>
:</span>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['url']) {?>
                <span><?php echo $_smarty_tpl->__("website");?>
:</span>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['C'],'customer_info'=>"Y"), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['email_changed']->value) {?>
                <span class="text-warning strong"><?php echo $_smarty_tpl->__("attention");?>
</span>
                <span class="text-warning"><?php echo $_smarty_tpl->__("notice_update_customer_details");?>
</span>

                <label for="update_customer_details" class="checkbox">
                    <input type="checkbox" name="update_customer_details" id="update_customer_details" value="Y"<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?> form=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');
}?> />
                <?php echo $_smarty_tpl->__("update_customer_info");?>
</label>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['allow_reselect_customer']->value) {?>
            <div class="enter-data">
                <div class="clearfix shift-button">
                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('extra_var'=>"order_management.select_customer?page=".((string)$_REQUEST['page']),'display'=>"radio",'but_text'=>$_smarty_tpl->__("change_customer"),'no_container'=>true,'but_meta'=>"btn",'shared_force'=>$_smarty_tpl->tpl_vars['users_shared_force']->value), 0);?>

                </div>
            </div>
        <?php }?>
    <?php } else { ?>
        <input type="hidden" name="user_data_required" id="selected_user_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['selected']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['customer']->value['user_id'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        <div class="mixed-controls">
            <div class="form-inline object-selector object-customer-add cm-object-customer-add-container">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('extra_var'=>"order_management.select_customer?page=".((string)$_REQUEST['page']),'display'=>"radio",'but_icon'=>"icon-reorder",'but_text'=>$_smarty_tpl->__("advanced_customer_search"),'show_but_text'=>false,'no_container'=>true,'but_meta'=>"btn",'shared_force'=>$_smarty_tpl->tpl_vars['users_shared_force']->value), 0);?>

                <select id="customer_add"
                        class="cm-object-selector cm-object-customer-add"
                        <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>
                            tabindex="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        multiple
                        name="customer_data"
                        data-ca-enable-images="true"
                        data-ca-enable-search="true"
                        data-ca-load-via-ajax="true"
                        data-ca-page-size="10"
                        data-ca-data-url="<?php echo fn_url("profiles.get_customer_list?lang_code=".((string)$_smarty_tpl->tpl_vars['descr_sl']->value));?>
"
                        data-ca-placeholder="<?php echo $_smarty_tpl->__("type_to_search");?>
"
                        data-ca-allow-clear="false"
                        data-ca-ajax-delay="250"
                        data-ca-dropdown-css-class="select2-dropdown-below-customer-add"
                        { if $autofocus == "false" }
                            { data-ca-autofocus="false" }
                        { else }
                            { data-ca-autofocus="true" }
                        { /if }>
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="enter-data">
            <?php smarty_template_function_profile_enter_data_link($_smarty_tpl,array('scroll_to'=>"profile_fields_c"));?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['is_empty_user_data']->value) {?>
        <div class="text-error">
            <label class="hidden cm-required" for="user_data_required"><?php echo $_smarty_tpl->__("user_data_required");?>
</label>
            <input type="hidden" id="user_data_required" name="user_data_required" value="" />
        </div>
        <?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="sidebar-row">
    <?php smarty_template_function_profile_edit_link($_smarty_tpl,array('scroll_to'=>"profile_fields_c"));?>

    <h6><?php echo $_smarty_tpl->__("customer_information");?>
</h6>
    <div class="profile-info">
        <i class="icon-user"></i>
        <?php echo Smarty::$_smarty_vars['capture']['customer_information'];?>

    </div>
</div>
<hr class="profile-info-delim" />

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position']=='shipping_first') {?>
    <div class="sidebar-row">
        <?php smarty_template_function_profile_edit_link($_smarty_tpl,array('scroll_to'=>"profile_fields_s"));?>

        <h6><?php echo $_smarty_tpl->__("shipping_address");?>
</h6>
        <div class="profile-info">
            <i class="icon-truck"></i>
            <?php echo Smarty::$_smarty_vars['capture']['shipping_address'];?>

        </div>
    </div>
    <hr class="profile-info-delim" />
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <div class="sidebar-row">
            <?php smarty_template_function_profile_edit_link($_smarty_tpl,array('scroll_to'=>"profile_fields_b"));?>

            <h6><?php echo $_smarty_tpl->__("billing_address");?>
</h6>
            <div class="profile-info">
                <i class="icon-tag"></i>
                <?php echo Smarty::$_smarty_vars['capture']['billing_address'];?>

            </div>
        </div>
        <hr class="profile-info-delim" />
    <?php }?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <div class="sidebar-row">
            <?php smarty_template_function_profile_edit_link($_smarty_tpl,array('scroll_to'=>"profile_fields_b"));?>

            <h6><?php echo $_smarty_tpl->__("billing_address");?>
</h6>
            <div class="profile-info">
                <i class="icon-tag"></i>
                <?php echo Smarty::$_smarty_vars['capture']['billing_address'];?>

            </div>
        </div>
    <?php }?>
    <hr class="profile-info-delim" />
    <div class="sidebar-row">
        <?php smarty_template_function_profile_edit_link($_smarty_tpl,array('scroll_to'=>"profile_fields_s"));?>

        <h6><?php echo $_smarty_tpl->__("shipping_address");?>
</h6>
        <div class="profile-info">
            <i class="icon-truck"></i>
            <?php echo Smarty::$_smarty_vars['capture']['shipping_address'];?>

        </div>
    </div>
    <hr class="profile-info-delim" />
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:profiles_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:profiles_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:profiles_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
