<?php /* Smarty version Smarty-3.1.21, created on 2020-10-23 14:29:48
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\views\snippets\components\tools_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19679418105f92beacc2b695-69723042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1ea048daa0a0979a57b9015c85e558a08717d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\views\\snippets\\components\\tools_list.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19679418105f92beacc2b695-69723042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icon' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f92beacc38c02_37754146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f92beacc38c02_37754146')) {function content_5f92beacc38c02_37754146($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('delete_selected'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"snippets:update_tools_list_snippets")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"snippets:update_tools_list_snippets"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete_selected"),'class'=>"cm-ajax cm-confirm",'dispatch'=>"dispatch[snippets.delete]",'form'=>"snippets_form"));?>
</li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"snippets:update_tools_list_snippets"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'id'=>"tools_snippets",'icon'=>$_smarty_tpl->tpl_vars['icon']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value));?>
<?php }} ?>
