<?php /* Smarty version Smarty-3.1.21, created on 2020-10-26 13:23:42
         compiled from "C:\xampp\htdocs\test-ro\design\themes\responsive\templates\addons\product_variations\hooks\products\product_option_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16814832095f96a3aeb5f2f5-48966071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9baba5cb8eaeafe8e4cdeaf995028fb9dee5a3cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-ro\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\products\\product_option_content.pre.tpl',
      1 => 1601450411,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16814832095f96a3aeb5f2f5-48966071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'quick_view' => 0,
    'config' => 0,
    'product_url' => 0,
    'feature' => 0,
    'feature_style_images' => 0,
    'feature_style_labels' => 0,
    'feature_style_dropdown' => 0,
    'variant' => 0,
    'show_all_possible_feature_variants' => 0,
    'is_feature_default_style' => 0,
    'purpose_create_variations' => 0,
    'container' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f96a3aec19338_64128385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f96a3aec19338_64128385')) {function content_5f96a3aec19338_64128385($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/test-ro/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants']&&$_smarty_tpl->tpl_vars['product']->value['detailed_params']['info_type']==="D") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div id="features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC">
        <?php $_smarty_tpl->tpl_vars['container'] = new Smarty_variable("product_detail_page", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['product_url'] = new Smarty_variable("products.view", null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>
            <?php $_smarty_tpl->tpl_vars['container'] = new Smarty_variable("product_main_info_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['product_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"product_id"), null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['detailed_params']['is_preview']) {?>
            <?php $_smarty_tpl->tpl_vars['product_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"action=preview"), null, 0);?>
        <?php }?>

        <div class="cm-picker-product-variation-features ty-product-options">
            <?php $_smarty_tpl->tpl_vars['feature_style_dropdown'] = new Smarty_variable(constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['feature_style_images'] = new Smarty_variable(constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_IMAGES"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['feature_style_labels'] = new Smarty_variable(constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_LABELS"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['purpose_create_variations'] = new Smarty_variable(constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"), null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>

                <?php $_smarty_tpl->tpl_vars['is_feature_default_style'] = new Smarty_variable(!in_array($_smarty_tpl->tpl_vars['feature']->value['feature_style'],array($_smarty_tpl->tpl_vars['feature_style_images']->value,$_smarty_tpl->tpl_vars['feature_style_labels']->value,$_smarty_tpl->tpl_vars['feature_style_dropdown']->value)), null, 0);?>
                <div class="ty-control-group ty-product-options__item clearfix">
                    <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                    <bdi>
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style']===$_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id']!=$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                    <?php continue 1;?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id']||$_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <div class="ty-product-option-container ty-product-option-container--feature-style-images">
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                                            <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php }?>
                                        <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                                            <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style']===$_smarty_tpl->tpl_vars['feature_style_dropdown']->value||$_smarty_tpl->tpl_vars['is_feature_default_style']->value) {?>
                            <div class="ty-product-option-container">
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                                <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php }?>
                                <div class="ty-product-option-child">
                                    <select class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===$_smarty_tpl->tpl_vars['purpose_create_variations']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?> cm-ajax-force" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                                            <option data-ca-variant-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                    data-ca-product-url="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id']==$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                            >
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                                <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php }?>
                            </div>
                        <?php }?>
                    </bdi>

                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style']===$_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("variant_images", null, null); ob_start(); ?>
                            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                   class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->tpl_vars['variant']->value['variant_id']==$_smarty_tpl->tpl_vars['feature']->value['variant_id']) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===$_smarty_tpl->tpl_vars['purpose_create_variations']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax cm-ajax-cache<?php }?>"
                                   <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===$_smarty_tpl->tpl_vars['purpose_create_variations']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                >
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])."_".((string)$_smarty_tpl->tpl_vars['variant']->value['variant_id'])."_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->tpl_vars['variant']->value['product']['main_pair'],'image_width'=>"70",'image_height'=>"70",'image_additional_attrs'=>array("width"=>70,"height"=>70)), 0);?>

                                </a>
                            <?php } ?>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                        <?php if (trim(Smarty::$_smarty_vars['capture']['variant_images'])) {?>
                            <div class="ty-clear-both">
                                <?php echo Smarty::$_smarty_vars['capture']['variant_images'];?>

                            </div>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style']===$_smarty_tpl->tpl_vars['feature_style_labels']->value) {?>
                        <div class="ty-clear-both">
                            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                                <input type="radio"
                                       name="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id']==$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                           checked
                                       <?php }?>
                                       id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-variant-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-product-url="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                       class="hidden ty-product-options__radio <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===$_smarty_tpl->tpl_vars['purpose_create_variations']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?> cm-ajax-force" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"
                                />
                                <label for="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                       class="ty-product-options__radio--label"
                                >
                                    <span class="ty-product-option-checkbox"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
<span class="ty-product-option-checkbox"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </label>
                            <?php } ?>
                        </div>
                    <?php }?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/product_option_content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/product_option_content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants']&&$_smarty_tpl->tpl_vars['product']->value['detailed_params']['info_type']==="D") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div id="features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC">
        <?php $_smarty_tpl->tpl_vars['container'] = new Smarty_variable("product_detail_page", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['product_url'] = new Smarty_variable("products.view", null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>
            <?php $_smarty_tpl->tpl_vars['container'] = new Smarty_variable("product_main_info_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['product_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"product_id"), null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['detailed_params']['is_preview']) {?>
            <?php $_smarty_tpl->tpl_vars['product_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"action=preview"), null, 0);?>
        <?php }?>

        <div class="cm-picker-product-variation-features ty-product-options">
            <?php $_smarty_tpl->tpl_vars['feature_style_dropdown'] = new Smarty_variable(constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['feature_style_images'] = new Smarty_variable(constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_IMAGES"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['feature_style_labels'] = new Smarty_variable(constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_LABELS"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['purpose_create_variations'] = new Smarty_variable(constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"), null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>

                <?php $_smarty_tpl->tpl_vars['is_feature_default_style'] = new Smarty_variable(!in_array($_smarty_tpl->tpl_vars['feature']->value['feature_style'],array($_smarty_tpl->tpl_vars['feature_style_images']->value,$_smarty_tpl->tpl_vars['feature_style_labels']->value,$_smarty_tpl->tpl_vars['feature_style_dropdown']->value)), null, 0);?>
                <div class="ty-control-group ty-product-options__item clearfix">
                    <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                    <bdi>
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style']===$_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id']!=$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                    <?php continue 1;?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id']||$_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <div class="ty-product-option-container ty-product-option-container--feature-style-images">
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                                            <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php }?>
                                        <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                                            <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style']===$_smarty_tpl->tpl_vars['feature_style_dropdown']->value||$_smarty_tpl->tpl_vars['is_feature_default_style']->value) {?>
                            <div class="ty-product-option-container">
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                                <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php }?>
                                <div class="ty-product-option-child">
                                    <select class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===$_smarty_tpl->tpl_vars['purpose_create_variations']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?> cm-ajax-force" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                                            <option data-ca-variant-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                    data-ca-product-url="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id']==$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                            >
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                                <div class="ty-product-option-child"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php }?>
                            </div>
                        <?php }?>
                    </bdi>

                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style']===$_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("variant_images", null, null); ob_start(); ?>
                            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                   class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->tpl_vars['variant']->value['variant_id']==$_smarty_tpl->tpl_vars['feature']->value['variant_id']) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===$_smarty_tpl->tpl_vars['purpose_create_variations']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax cm-ajax-cache<?php }?>"
                                   <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===$_smarty_tpl->tpl_vars['purpose_create_variations']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                >
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])."_".((string)$_smarty_tpl->tpl_vars['variant']->value['variant_id'])."_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->tpl_vars['variant']->value['product']['main_pair'],'image_width'=>"70",'image_height'=>"70",'image_additional_attrs'=>array("width"=>70,"height"=>70)), 0);?>

                                </a>
                            <?php } ?>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                        <?php if (trim(Smarty::$_smarty_vars['capture']['variant_images'])) {?>
                            <div class="ty-clear-both">
                                <?php echo Smarty::$_smarty_vars['capture']['variant_images'];?>

                            </div>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style']===$_smarty_tpl->tpl_vars['feature_style_labels']->value) {?>
                        <div class="ty-clear-both">
                            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                                <input type="radio"
                                       name="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id']==$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                           checked
                                       <?php }?>
                                       id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-variant-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-product-url="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                       class="hidden ty-product-options__radio <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===$_smarty_tpl->tpl_vars['purpose_create_variations']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-history<?php }?> cm-ajax-force" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"
                                />
                                <label for="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                       class="ty-product-options__radio--label"
                                >
                                    <span class="ty-product-option-checkbox"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
<span class="ty-product-option-checkbox"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </label>
                            <?php } ?>
                        </div>
                    <?php }?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }?>
<?php }?><?php }} ?>
