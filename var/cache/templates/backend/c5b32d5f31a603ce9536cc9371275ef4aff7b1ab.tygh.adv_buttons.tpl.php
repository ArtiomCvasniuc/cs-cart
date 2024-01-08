<?php /* Smarty version Smarty-3.1.21, created on 2020-10-23 14:29:49
         compiled from "C:\xampp\htdocs\test-ro\design\backend\templates\views\snippets\components\adv_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13946108595f92bead002d67-55543032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b32d5f31a603ce9536cc9371275ef4aff7b1ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\backend\\templates\\views\\snippets\\components\\adv_buttons.tpl',
      1 => 1599553797,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13946108595f92bead002d67-55543032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_url' => 0,
    'link_text' => 0,
    'return_url_escape' => 0,
    'result_ids' => 0,
    'type' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f92bead00d150_61621436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f92bead00d150_61621436')) {function content_5f92bead00d150_61621436($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_snippet','add_snippet'));
?>
<?php if (fn_check_permissions("snippets","update","admin","POST")) {?>
    <?php $_smarty_tpl->tpl_vars['return_url_escape'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>

    <?php ob_start();
echo $_smarty_tpl->__("add_snippet");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('method'=>"POST",'id'=>"add_snippet",'text'=>$_tmp2,'link_text'=>(($tmp = @$_smarty_tpl->tpl_vars['link_text']->value)===null||$tmp==='' ? '' : $tmp),'title'=>$_smarty_tpl->__("add_snippet"),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update?snippet_id=0&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)."&type=".((string)$_smarty_tpl->tpl_vars['type']->value)."&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value)), 0);?>

<?php }?><?php }} ?>
