<?php /* Smarty version Smarty-3.1.21, created on 2020-10-23 14:29:39
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\views\notification_settings\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18685403395f92bea3d17d34-87143645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bf0782a0d07bcac1e7c42478057201b559e8a47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\views\\notification_settings\\manage.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18685403395f92bea3d17d34-87143645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_section' => 0,
    'receiver_type' => 0,
    'transports' => 0,
    'event_groups' => 0,
    'events' => 0,
    'event' => 0,
    'array_transports' => 0,
    'template_code' => 0,
    'template_area' => 0,
    'event_id' => 0,
    'transport_name' => 0,
    'transport' => 0,
    'regulation' => 0,
    'group_name' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f92bea3df9312_23410022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f92bea3df9312_23410022')) {function content_5f92bea3df9312_23410022($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('customer_notifications','admin_notifications','vendor_notifications','event.transport.','other_notification','see_full_templates_list','notifications'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/navigation_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active_section'=>$_smarty_tpl->tpl_vars['active_section']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"notification_settings:section_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"notification_settings:section_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['receiver_type']->value==smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
        <?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("customer_notifications"), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['receiver_type']->value==smarty_modifier_enum("UserTypes::ADMIN")) {?>
        <?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("admin_notifications"), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['receiver_type']->value==smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("vendor_notifications"), null, 0);?>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"notification_settings:section_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="notifications_form" class=" form-horizontal form-edit form-setting">
        <input type="hidden" id="receiver_type" name="receiver_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_type']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <table class="table">
            <tr>
                <td></td>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['transport'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['transport']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <td><?php echo $_smarty_tpl->__("event.transport.".((string)$_smarty_tpl->tpl_vars['transport']->value));?>
</td>
                <?php } ?>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['events'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['events']->_loop = false;
 $_smarty_tpl->tpl_vars['group_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['event_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['events']->key => $_smarty_tpl->tpl_vars['events']->value) {
$_smarty_tpl->tpl_vars['events']->_loop = true;
 $_smarty_tpl->tpl_vars['group_name']->value = $_smarty_tpl->tpl_vars['events']->key;
?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("events_group", null, null); ob_start(); ?>
                    <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['event_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['event_id']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['array_transports'] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value["receivers"][$_smarty_tpl->tpl_vars['receiver_type']->value], null, 0);?>
                        <?php if (!$_smarty_tpl->tpl_vars['array_transports']->value) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['template_code'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['event']->value["receivers"][$_smarty_tpl->tpl_vars['receiver_type']->value]["template_code"])===null||$tmp==='' ? '' : $tmp), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['template_area'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['event']->value["receivers"][$_smarty_tpl->tpl_vars['receiver_type']->value]["template_area"])===null||$tmp==='' ? '' : $tmp), null, 0);?>
                        <tr>
                            <td id="ev_name">
                                <?php if ($_smarty_tpl->tpl_vars['template_code']->value&&$_smarty_tpl->tpl_vars['template_area']->value) {?>
                                    <a href="<?php echo htmlspecialchars(fn_url("email_templates.update?code=".((string)$_smarty_tpl->tpl_vars['template_code']->value)."&area=".((string)$_smarty_tpl->tpl_vars['template_area']->value)."&event_id=".((string)$_smarty_tpl->tpl_vars['event_id']->value)."&receiver=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)), ENT_QUOTES, 'UTF-8');?>
">
                                <?php }?>
                                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['event']->value["name"]["template"],$_smarty_tpl->tpl_vars['event']->value["name"]["params"]);?>

                                <?php if (($_smarty_tpl->tpl_vars['template_code']->value)&&$_smarty_tpl->tpl_vars['template_area']->value) {?>
                                    </a>
                                <?php }?>
                            </td>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['transport'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['transport']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                <td>
                                    <?php  $_smarty_tpl->tpl_vars['regulation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['regulation']->_loop = false;
 $_smarty_tpl->tpl_vars['transport_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['array_transports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['regulation']->key => $_smarty_tpl->tpl_vars['regulation']->value) {
$_smarty_tpl->tpl_vars['regulation']->_loop = true;
 $_smarty_tpl->tpl_vars['transport_name']->value = $_smarty_tpl->tpl_vars['regulation']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['transport_name']->value==$_smarty_tpl->tpl_vars['transport']->value) {?>
                                            <input type="hidden" name="notification_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_id']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_type']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transport_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
                                            <input name="notification_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_id']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_type']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transport_name']->value, ENT_QUOTES, 'UTF-8');?>
]" type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['regulation']->value) {?>checked<?php }?>/>
                                        <?php }?>
                                    <?php } ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']['events_group'])) {?>
                    <tr>
                        <td id="group" colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+1, ENT_QUOTES, 'UTF-8');?>
"><h3><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['group_name']->value);?>
</h3></td>
                    </tr>
                    <?php echo Smarty::$_smarty_vars['capture']['events_group'];?>

                <?php }?>

            <?php } ?>
            <tr>
                <td id="group" colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+1, ENT_QUOTES, 'UTF-8');?>
"><h3><?php echo $_smarty_tpl->__("other_notification");?>
</h3></td>
            </tr>
            <tr>
                <td colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+1, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->__("see_full_templates_list",array("[email_template_manage]"=>fn_url("email_templates.manage"),"[internal_template_manage]"=>fn_url("internal_templates.manage")));?>

                </td>
            </tr>
        </table>
    </form>
    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[notification_settings.m_update]",'but_role'=>"submit-link",'but_target_form'=>"notifications_form"), 0);?>

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

<?php ob_start();?><?php echo $_smarty_tpl->__("notifications");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>(($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? $_tmp1 : $tmp),'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar_position'=>"right",'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
