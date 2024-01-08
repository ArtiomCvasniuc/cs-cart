<?php /* Smarty version Smarty-3.1.21, created on 2020-10-28 11:25:20
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\views\profile_fields\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13600906535f992af084fa27-04894890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7846d7e52e82a0d5cca5bf34cd12fce880a9e189' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\views\\profile_fields\\update.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13600906535f992af084fa27-04894890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'block_fields' => 0,
    'runtime' => 0,
    'hide_inputs' => 0,
    'id' => 0,
    'field_name' => 0,
    'profile_type' => 0,
    'profile_types' => 0,
    'area' => 0,
    '_show' => 0,
    '_required' => 0,
    '_colspan' => 0,
    'value_id' => 0,
    'value' => 0,
    'hide_multiple_buttons' => 0,
    'title_start' => 0,
    'title_end' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f992af0991719_33176634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f992af0991719_33176634')) {function content_5f992af0991719_33176634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_corresponding_profile_field','general','variants','description','vendor_terms_field_terms_text','edit','vendor_terms_field_alert','edit','profile_field_name','profile_field_name_tooltip','profile_field_name','position','type','phone','zip_postal_code','checkbox','date','input_field','radiogroup','selectbox','textarea','email','vendor_terms','states','country','address_type','section','contact_information','billing_address','shipping_address','contact_information','billing_address','shipping_address','user_class','wrapper_class','show','required','position_short','description','position_short','description','tools','position_short','description','tools','new_profile_field','editing_profile_field'));
?>

<?php if ($_smarty_tpl->tpl_vars['field']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable("0", null, 0);?>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
function fn_check_field_type(value, tab_id)
{
    Tygh.$('#' + tab_id).toggleBy(!(value == 'R' || value == 'S'));
}
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']=="Y"||$_smarty_tpl->tpl_vars['field']->value['section']==smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")) {?>
    <?php $_smarty_tpl->tpl_vars["block_fields"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("blocked_changing_info", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['block_fields']->value&&$_smarty_tpl->tpl_vars['field']->value['is_default']!="Y") {?>
        <?php echo $_smarty_tpl->__("edit_corresponding_profile_field",array("[URL]"=>fn_url("profile_fields.update&field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['matching_id']))));?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars["hide_inputs"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_multiple_buttons"] = new Smarty_variable("hidden", null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" method="post" name="add_fields_form" class="form-horizontal form-edit  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_inputs']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="cm-j-tabs cm-track tabs">
    <ul class="nav nav-tabs">
        <li id="tab_new_profile<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_variants<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-js <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']=="Y"||($_smarty_tpl->tpl_vars['field']->value['field_type']!=smarty_modifier_enum("ProfileFieldTypes::RADIO")&&$_smarty_tpl->tpl_vars['field']->value['field_type']!=smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX"))) {?>hidden<?php }?>"
        ><a><?php echo $_smarty_tpl->__("variants");?>
</a></li>
    </ul>
</div>
<div class="cm-tabs-content">
    <div id="content_tab_new_profile<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="field_data[field_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="field_data[matching_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="field_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <div class="control-group">
            <label for="elm_field_description" class="control-label cm-required"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
            <input id="elm_field_description" class="input-large" type="text" name="field_data[description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS")) {?>
            <div class="control-group">
                <label for="elm_field_vendor_terms_content" class="control-label"><?php echo $_smarty_tpl->__("vendor_terms_field_terms_text");?>
:</label>
                <div class="controls">
                    <a href="<?php echo htmlspecialchars(fn_url("languages.translations?q=vendor_terms_n_conditions_content"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("edit");?>
</a>
                </div>
            </div>

            <div class="control-group">
                <label for="elm_field_vendor_terms_alert" class="control-label"><?php echo $_smarty_tpl->__("vendor_terms_field_alert");?>
:</label>
                <div class="controls">
                    <a href="<?php echo htmlspecialchars(fn_url("languages.translations?q=vendor_terms_n_conditions_alert"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("edit");?>
</a>
                </div>
            </div>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['field_name']->value) {?>
            <div class="control-group">
                <label for="elm_field_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("profile_field_name");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("profile_field_name_tooltip")), 0);?>
:</label>
                <div class="controls">
                    <input id="elm_field_name" class="input-text-short" type="text" name="field_data[field_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
            </div>
        <?php } else { ?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("profile_field_name");?>
:</label>
                <div class="controls">
                    <span class="shift-input"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <input name="field_data[field_name]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_field_position"><?php echo $_smarty_tpl->__("position");?>
:</label>
            <div class="controls">
            <input class="input-text-short" id="elm_field_position" type="text" size="3" name="field_data[position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['position'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php if (!$_smarty_tpl->tpl_vars['field']->value['field_id']&&$_smarty_tpl->tpl_vars['profile_type']->value) {?>
            <input type="hidden" name="field_data[profile_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_field_type"><?php echo $_smarty_tpl->__("type");?>
:</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']!==smarty_modifier_enum("ProfileFieldTypes::STATE")&&$_smarty_tpl->tpl_vars['field']->value['field_type']!==smarty_modifier_enum("ProfileFieldTypes::COUNTRY")&&$_smarty_tpl->tpl_vars['field']->value['field_type']!==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
                    <select id="elm_field_type" name="field_data[field_type]" onchange="fn_check_field_type(this.value, 'tab_variants<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');" <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>disabled="disabled"<?php }?>>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profile_fields:field_types")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profile_fields:field_types"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::PHONE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("phone");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zip_postal_code");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::CHECKBOX"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("checkbox");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::DATE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("date");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::INPUT"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::INPUT")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("input_field");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::RADIO"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("radiogroup");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("selectbox");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("textarea");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::EMAIL"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("email");?>
</option>
                        <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>
                            
                            <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_terms");?>
</option>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profile_fields:field_types"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </select>
                <?php } else { ?>
                    <select id="elm_field_type" name="field_data[field_type]" disabled="disabled">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profile_fields:field_types")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profile_fields:field_types"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::STATE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("states");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::COUNTRY"), ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::COUNTRY"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("country");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("address_type");?>
</option>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profile_fields:field_types"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </select>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>
                    <input type="hidden" name="field_data[field_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
" />
                    <div class="micro-note"><?php echo Smarty::$_smarty_vars['capture']['blocked_changing_info'];?>
</div>
                <?php }?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_section"><?php echo $_smarty_tpl->__("section");?>
:</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <input type="hidden" name="field_data[section]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['section'], ENT_QUOTES, 'UTF-8');?>
" />
                <span class="shift-input">
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['section']==smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")) {?>
                        <?php echo $_smarty_tpl->__("contact_information");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['section']==smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")||$_smarty_tpl->tpl_vars['field']->value['section']==smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
                        <?php echo $_smarty_tpl->__("billing_address");?>
/<?php echo $_smarty_tpl->__("shipping_address");?>

                    <?php }?>
                </span>
            <?php } else { ?>
                <select id="elm_field_section" name="field_data[section]">
                    <?php if (in_array(smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION"),(array) $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_sections"])) {?>
                    <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION"), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['section']==smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")) {?>selected="selected"<?php }?>
                    ><?php echo $_smarty_tpl->__("contact_information");?>
</option>
                    <?php }?>
                    <?php if (in_array(smarty_modifier_enum("ProfileFieldSections::BILLING_AND_SHIPPING_ADDRESS"),(array) $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_sections"])) {?>
                    <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldSections::BILLING_AND_SHIPPING_ADDRESS"), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['section']==smarty_modifier_enum("ProfileFieldSections::BILLING_AND_SHIPPING_ADDRESS")) {?>selected="selected"<?php }?>
                    ><?php echo $_smarty_tpl->__("billing_address");?>
/<?php echo $_smarty_tpl->__("shipping_address");?>
</option>
                    <?php }?>
                </select>
            <?php }?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_user_class"><?php echo $_smarty_tpl->__("user_class");?>
:</label>
            <div class="controls">
                <input id="elm_field_user_class" class="input-large" type="text" name="field_data[class]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_wrapper_class"><?php echo $_smarty_tpl->__("wrapper_class");?>
:</label>
            <div class="controls">
                <input id="elm_field_wrapper_class" class="input-large" type="text" name="field_data[wrapper_class]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['wrapper_class'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php  $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_areas"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['area']->key => $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['_show'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['area']->value)."_show", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['_required'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['area']->value)."_required", null, 0);?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['area']->value);?>
 (<?php echo $_smarty_tpl->__("show");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("required");?>
):</label>
                <div class="controls">
                    <input type="hidden" name="field_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y"&&$_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>Y<?php } else { ?>N<?php }?>" />
                    <input type="checkbox" name="field_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-switch-availability" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email"||($_smarty_tpl->tpl_vars['field']->value['field_name']=="company"&&$_smarty_tpl->tpl_vars['field']->value['profile_type']==smarty_modifier_enum("ProfileTypes::CODE_SELLER"))) {?>disabled="disabled"<?php }?> />&nbsp;

                    <input type="hidden" name="field_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>Y<?php } else { ?>N<?php }?>" />
                    <span id="req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>_email<?php }?>">
                        <input type="checkbox" name="field_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value]=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="N"||$_smarty_tpl->tpl_vars['field']->value['field_name']=="email"||($_smarty_tpl->tpl_vars['field']->value['field_name']=="company"&&$_smarty_tpl->tpl_vars['field']->value['profile_type']==smarty_modifier_enum("ProfileTypes::CODE_SELLER"))) {?>disabled="disabled"<?php }?> class="" />
                    </span>
                </div>
            </div>
        <?php } ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profile_fields:profile_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profile_fields:profile_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profile_fields:profile_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!--content_tab_new_profile<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <div class="<?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']=="Y"||($_smarty_tpl->tpl_vars['field']->value['field_type']!=smarty_modifier_enum("ProfileFieldTypes::RADIO")&&$_smarty_tpl->tpl_vars['field']->value['field_type']!=smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX"))) {?>hidden<?php }?>" id="content_tab_variants<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>
            <div><?php echo Smarty::$_smarty_vars['capture']['blocked_changing_info'];?>
</div>
        <?php }?>
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-responsive">
            <tr id="field_values_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="no-border td-no-bg">
                <td colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <table width="1" class="table">
                        <thead>
                            <tr class="cm-first-sibling">
                                <th style="width: 8%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                                <th style="width: 68%"><?php echo $_smarty_tpl->__("description");?>
</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value) {?>
                        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["value_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["values"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["value_id"]->value = $_smarty_tpl->tpl_vars["value"]->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["values"]['iteration']++;
?>
                        <tr class="cm-first-sibling">
                            <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                                <input class="input-micro" size="3" type="text" name="field_data[values][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_id']->value, ENT_QUOTES, 'UTF-8');?>
][position]"
                                   value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['values']['iteration'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>disabled<?php }?> />
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("description");?>
">
                                <input class="span7" type="text" name="field_data[values][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_id']->value, ENT_QUOTES, 'UTF-8');?>
][description]"
                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"  <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>disabled<?php }?> />
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                                <?php if (!$_smarty_tpl->tpl_vars['block_fields']->value) {
echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('only_delete'=>"Y"), 0);
}?>
                            </td>
                        </tr>
                        <?php } ?>
                    <?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['block_fields']->value) {?>
                    <tr id="box_elm_values_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['hide_multiple_buttons']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_multiple_buttons']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
"><input class="input-micro" size="3" type="text" name="field_data[add_values][0][position]" /></td>
                        <td data-th="<?php echo $_smarty_tpl->__("description");?>
"><input class="span7" type="text" name="field_data[add_values][0][description]" /></td>
                        <td data-th="<?php echo $_smarty_tpl->__("tools");?>
"><?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"elm_values_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>2), 0);?>
</td>
                    </tr>
                <?php }?>
                    </table>
                </td>
            </tr>
            </table>
        </div>
    <!--content_tab_variants<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
</div>
</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profile_fields.update]",'but_target_form'=>"add_fields_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("new_profile_field"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['title_start'] = new Smarty_variable($_smarty_tpl->__("editing_profile_field"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['description'], null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->tpl_vars['title_start']->value,'title_end'=>$_smarty_tpl->tpl_vars['title_end']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
