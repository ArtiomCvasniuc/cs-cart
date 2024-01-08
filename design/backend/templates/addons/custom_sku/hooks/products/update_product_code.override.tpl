<div class="control-group">
    <label class="control-label" for="elm_product_code_ven">{__("sku")}:</label>
    <div class="controls">
        <input type="text" name="product_data[product_code_ven]" id="elm_product_code_ven" size="6" maxlength="6"  value="{$product_data.product_code_ven}" class="input-mini" 
        readonly="true" />
        <input type="text" name="product_data[product_code_gen]" id="elm_product_code_gen" size="6" maxlength="6"  value="{$product_data.product_code_gen}" class="input-mini" />
    </div>
</div>

{script src="js/addons/custom_sku/sku_generation.js"}