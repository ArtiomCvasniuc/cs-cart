<?php /* Smarty version Smarty-3.1.21, created on 2020-10-28 08:13:53
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\views\profiles\components\profiles_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4517482155f98fe117e8074-94179540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fa1f64e8a55c7e3adf38edb42d9d6a9d0b496fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\views\\profiles\\components\\profiles_account.tpl',
      1 => 1602759016,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4517482155f98fe117e8074-94179540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uid' => 0,
    'user_data' => 0,
    'auth' => 0,
    'runtime' => 0,
    'display' => 0,
    '_u_type' => 0,
    'config' => 0,
    'redirect_denied' => 0,
    'r_url' => 0,
    'hide_inputs' => 0,
    'languages' => 0,
    'lang_code' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f98fe118437c8_53965348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f98fe118437c8_53965348')) {function content_5f98fe118437c8_53965348($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('user_account_information','email','password','confirm_password','account_type','customer','vendor_administrator','administrator','tax_exempt','language'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("user_account_information")), 0);?>


<?php if ($_smarty_tpl->tpl_vars['uid']->value==1||(fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_data']->value)&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']&&defined("RESTRICTED_ADMIN"))||$_smarty_tpl->tpl_vars['user_data']->value['is_root']=="Y"||$_smarty_tpl->tpl_vars['auth']->value['is_root']=="Y"||$_smarty_tpl->tpl_vars['user_data']->value['user_id']==$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <input type="hidden" name="user_data[status]" value="A" />
    <input type="hidden" name="user_data[user_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['user_type'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="control-group">
    <label for="email" class="control-label cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
    <div class="controls">
        <input type="text" id="email" name="user_data[email]" class="input-large" size="32" maxlength="128" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label for="password1" class="control-label cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
    <div class="controls">
        <input type="password" id="password1" name="user_data[password1]" class="input-large cm-autocomplete-off" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="update") {?>            <?php }?>" />
    </div>
</div>

<div class="control-group">
    <label for="password2" class="control-label cm-required"><?php echo $_smarty_tpl->__("confirm_password");?>
:</label>
    <div class="controls">
        <input type="password" id="password2" name="user_data[password2]" class="input-large cm-autocomplete-off" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="update") {?>            <?php }?>" />
    </div>
</div>

<?php if (($_smarty_tpl->tpl_vars['uid']->value!=1||defined("RESTRICTED_ADMIN"))&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']!=$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['user_data']->value['is_root']!="Y"||!fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_data']->value)||!$_smarty_tpl->tpl_vars['user_data']->value['user_id']||($_smarty_tpl->tpl_vars['user_data']->value['company_id']&&!$_smarty_tpl->tpl_vars['auth']->value['company_id'])) {?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"user_data[status]",'id'=>"user_data",'obj'=>$_smarty_tpl->tpl_vars['user_data']->value,'hidden'=>false,'display'=>$_smarty_tpl->tpl_vars['display']->value), 0);?>


        <?php $_smarty_tpl->tpl_vars["_u_type"] = new Smarty_variable((($tmp = @$_REQUEST['user_type'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value['user_type'] : $tmp), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="add") {?>
            <input type="hidden" name="user_data[user_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_u_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php } else { ?>
            <div class="control-group">
                <label for="user_type" class="control-label cm-required"><?php echo $_smarty_tpl->__("account_type");?>
:</label>
                <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"user_type"), null, 0);?>
                <div class="controls">
                <select id="user_type" name="user_data[user_type]"<?php if (!$_smarty_tpl->tpl_vars['redirect_denied']->value) {?> onchange="Tygh.$.redirect('<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['r_url']->value)."&user_type="), ENT_QUOTES, 'UTF-8');?>
' + this.value);"<?php }?>>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:account")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:account"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if (!(fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['_u_type']->value!="A")||$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                            <option value="C" <?php if ($_smarty_tpl->tpl_vars['_u_type']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("customer");?>
</option>
                        <?php }?>
                        <?php if (fn_allowed_for("MULTIVENDOR")&&fn_check_view_permissions("profiles.add")) {?>
                            <option value="V" <?php if ($_smarty_tpl->tpl_vars['_u_type']->value=="V") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_administrator");?>
</option>
                        <?php }?>
                        <?php if (@constant('RESTRICTED_ADMIN')!=1||$_smarty_tpl->tpl_vars['user_data']->value['user_id']==$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                            <?php if (fn_allowed_for("ULTIMATE")||$_smarty_tpl->tpl_vars['_u_type']->value=="A") {?>
                                <option value="A" <?php if ($_smarty_tpl->tpl_vars['_u_type']->value=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("administrator");?>
</option>
                            <?php }?>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:account"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </select>
                </div>
            </div>
        <?php }?>

        <div class="control-group">
            <label class="control-label" for="tax_exempt"><?php echo $_smarty_tpl->__("tax_exempt");?>
:</label>
            <input type="hidden" name="user_data[tax_exempt]" value="N" />
            <div class="controls">
                <input id="tax_exempt" type="checkbox" name="user_data[tax_exempt]" value="Y" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['tax_exempt']=="Y") {?>checked="checked"<?php }?> />
            </div>
        </div>

    <?php }?>
<?php }?>

<div class="control-group">
    <label class="control-label" for="user_language"><?php echo $_smarty_tpl->__("language");?>
</label>
    <div class="controls">
    <select name="user_data[lang_code]" id="user_language">
        <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_smarty_tpl->tpl_vars["lang_code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
 $_smarty_tpl->tpl_vars["lang_code"]->value = $_smarty_tpl->tpl_vars["language"]->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['lang_code']->value==$_smarty_tpl->tpl_vars['user_data']->value['lang_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
    </div>
</div>
<?php }} ?>
