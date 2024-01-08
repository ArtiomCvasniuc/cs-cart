{hook name="products:notification_items"}
    {if $added_products}
        {foreach from=$added_products item=product key="key"}     

            {assign var="product_id" value=$product.product_id}
            {assign var="company" value=$product_id|fn_get_company_by_product_id}
            {* sprint_6_show_product_price_only_for_authorized_users *}
            {assign var="vendor_id" value=$company.company_id}
            {assign var="show_price" value=$vendor_id|fn_is_necessary_to_show_price}

            {hook name="products:notification_product"}
            <div class="ty-product-notification__item clearfix">
                {include file="common/image.tpl" image_width="50" image_height="50" images=$product.main_pair no_ids=true class="ty-product-notification__image"}
                <div class="ty-product-notification__content clearfix">
                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="ty-product-notification__product-name">{$product.product_id|fn_get_product_name nofilter}</a>
                    {if !($settings.Checkout.allow_anonymous_shopping == "hide_price_and_add_to_cart" && !$auth.user_id)}
                        {if $auth.user_id == ''}
                            {if $show_price == 'off'}
                                <div class="ty-product-notification__price">
                                    {if !$hide_amount}
                                        <span class="none">{$product.amount}</span>&nbsp;x&nbsp;{include file="common/price.tpl" value=$product.display_price span_id="price_`$key`" class="none"}
                                    {/if}
                                </div>
                            {/if}
                        {else}
                            <div class="ty-product-notification__price">
                                {if !$hide_amount}
                                    <span class="none">{$product.amount}</span>&nbsp;x&nbsp;{include file="common/price.tpl" value=$product.display_price span_id="price_`$key`" class="none"}
                                {/if}
                            </div>
                        {/if}
                    {/if}
                    {if $product.product_option_data}
                    {include file="common/options_info.tpl" product_options=$product.product_option_data}
                    {/if}
                </div>
            </div>
            {/hook}
        {/foreach}
    {else}
    {$empty_text}
    {/if}
{/hook}
