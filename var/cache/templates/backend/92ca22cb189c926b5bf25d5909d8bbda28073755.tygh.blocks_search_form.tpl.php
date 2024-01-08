<?php /* Smarty version Smarty-3.1.21, created on 2020-11-02 15:36:27
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\views\block_manager\components\blocks_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20122338515f9ffd4b3595f9-74344329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ca22cb189c926b5bf25d5909d8bbda28073755' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\views\\block_manager\\components\\blocks_search_form.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20122338515f9ffd4b3595f9-74344329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'in_popup' => 0,
    'page_part' => 0,
    '_page_part' => 0,
    'block_search_form_prefix' => 0,
    'form_meta' => 0,
    'search_type' => 0,
    'selected_section' => 0,
    'put_request_vars' => 0,
    'extra' => 0,
    'search' => 0,
    'block_types' => 0,
    'block_type' => 0,
    'layouts' => 0,
    'layout' => 0,
    'locations' => 0,
    'location' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9ffd4b397c31_94313971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9ffd4b397c31_94313971')) {function content_5f9ffd4b397c31_94313971($_smarty_tpl) {?><?php if (!is_callable('smarty_function_array_to_fields')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.array_to_fields.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','blocks','type','all_block_types','layout','all_layouts','location','all_locations'));
?>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page_part']->value) {?>
    <?php $_smarty_tpl->tpl_vars['_page_part'] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['page_part']->value), null, 0);?>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_page_part']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_search_form_prefix']->value, ENT_QUOTES, 'UTF-8');?>
search_form" method="get" class="cm-disable-empty <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="search_form">
<input type="hidden" name="type" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search_type']->value)===null||$tmp==='' ? "simple" : $tmp), ENT_QUOTES, 'UTF-8');?>
" autofocus="autofocus" />
<?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!='') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<input type="hidden" name="pcode_from_q" value="Y" />

<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback")),$_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
    <div class="sidebar-field">
        <label for="name"><?php echo $_smarty_tpl->__("blocks");?>
</label>
        <input type="text" name="name" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>

    <div class="sidebar-field">
        <div class="control-group">
            <label for="elm_type" class="control-label"><?php echo $_smarty_tpl->__("type");?>
</label>
            <div class="controls">
                <select name="type" id="elm_type">
                    <option value="">- <?php echo $_smarty_tpl->__("all_block_types");?>
 -</option>
                    <?php  $_smarty_tpl->tpl_vars['block_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block_type']->key => $_smarty_tpl->tpl_vars['block_type']->value) {
$_smarty_tpl->tpl_vars['block_type']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_type']->value['type'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['block_type']->value['type']==$_smarty_tpl->tpl_vars['search']->value['type']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_type']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>

    <div class="sidebar-field">
        <div class="control-group">
            <label for="elm_layout_id" class="control-label"><?php echo $_smarty_tpl->__("layout");?>
</label>
            <div class="controls">
                <select name="layout_id" id="elm_layout_id">
                    <option value="">- <?php echo $_smarty_tpl->__("all_layouts");?>
 -</option>
                    <?php  $_smarty_tpl->tpl_vars['layout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layout']->key => $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['layout']->value['layout_id']==$_smarty_tpl->tpl_vars['search']->value['layout_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['theme'], ENT_QUOTES, 'UTF-8');?>
)</option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="sidebar-field">
        <div class="control-group">
            <label for="elm_location_id" class="control-label"><?php echo $_smarty_tpl->__("location");?>
</label>
            <div class="controls">
                <select name="location_id" id="elm_location_id">
                    <option value="">- <?php echo $_smarty_tpl->__("all_locations");?>
 -</option>
                    <?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['location']->value['location_id']==$_smarty_tpl->tpl_vars['search']->value['location_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['layout_name'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['theme_name'], ENT_QUOTES, 'UTF-8');?>
): <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"blocks",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0);?>


<!--search_form--></form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }?>
<?php }} ?>
