{if !$smarty.session.auth.age && $product.need_age_verification == "Y"}
<div class="ty-product-list">

    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{$product.product nofilter}</a>
    {hook name="products:product_additional_info"}
    {/hook}

    <div class="ty-mt-m">
        <div class="ty-age-verification__txt">{__("product_need_age_verification")}</div>
        <div class="buttons-container">
            {include file="buttons/button.tpl" but_text=__("verify") but_href="products.view?product_id=`$product.product_id`" but_meta="ty-btn__secondary" but_role="text"}
        </div>
    </div>
</div>
<hr />
{/if}