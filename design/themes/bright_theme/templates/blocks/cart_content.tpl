{assign var="dropdown_id" value=$block.snapping_id}
{assign var="r_url" value=$config.current_url|escape:url}
{hook name="checkout:cart_content"}
    <div class="ty-dropdown-box" id="cart_status_{$dropdown_id}">
        <div id="sw_dropdown_{$dropdown_id}" class="ty-dropdown-box__title cm-combination">
        <a href="{"checkout.cart"|fn_url}">
            {hook name="checkout:dropdown_title"}
            <i class="ty-minicart__icon ty-icon-moon-commerce{if $smarty.session.cart.amount} filled{else} empty{/if}"></i>
            <span class="ty-minicart-title{if !$smarty.session.cart.amount} empty-cart{/if} ty-hand">
                <span class="ty-block ty-minicart-title__header ty-uppercase">{__("my_cart")}</span>
                <span class="ty-block">
                {if $smarty.session.cart.amount}
                    {$smarty.session.cart.amount}&nbsp;{__("items")} {__("for")}&nbsp;{include file="common/price.tpl" value=$smarty.session.cart.display_subtotal}
                {else}
                    {__("cart_is_empty")}
                {/if}
                </span>
            </span>
            {/hook}
        </a>
        </div>
        {* sprint_6_show_product_price_only_for_authorized_users *}
        <div id="dropdown_{$dropdown_id}" class="cm-popup-box ty-dropdown-box__content hidden">
            {hook name="checkout:minicart"}
                <div class="cm-cart-content {if $block.properties.products_links_type == "thumb"}cm-cart-content-thumb{/if} {if $block.properties.display_delete_icons == "Y"}cm-cart-content-delete{/if}">
                        <div class="ty-cart-items">
                            {if $smarty.session.cart.amount}
                                <ul class="ty-cart-items__list">
                                    {hook name="index:cart_status"}
                                        {assign var="_cart_products" value=$smarty.session.cart.products|array_reverse:true}
                                        {foreach from=$_cart_products key="key" item="product" name="cart_products"}
                                            {assign var="vendor_id" value=$product.company_id}
                                            {assign var="show_price" value=$vendor_id|fn_is_necessary_to_show_price}
                                            {hook name="checkout:minicart_product"}
                                            {if !$product.extra.parent}
                                                <li class="ty-cart-items__list-item">
                                                    {hook name="checkout:minicart_product_info"}
                                                    {if $block.properties.products_links_type == "thumb"}
                                                        <div class="ty-cart-items__list-item-image">
                                                            {include file="common/image.tpl" image_width="40" image_height="40" images=$product.main_pair no_ids=true}
                                                        </div>
                                                    {/if}
                                                    <div class="ty-cart-items__list-item-desc">
                                                        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{$product.product|default:fn_get_product_name($product.product_id) nofilter}</a>
                                                    <p>
                                                        {if $auth.user_id == ''}
                                                            {if $show_price == 'off'}
                                                                <span>{$product.amount}</span><span>&nbsp;x&nbsp;</span>{include file="common/price.tpl" value=$product.display_price span_id="price_`$key`_`$dropdown_id`" class="none"}
                                                            {/if}
                                                        {else}
                                                            <span>{$product.amount}</span><span>&nbsp;x&nbsp;</span>{include file="common/price.tpl" value=$product.display_price span_id="price_`$key`_`$dropdown_id`" class="none"}
                                                        {/if}
                                                    </p>
                                                    </div>
                                                    {if $block.properties.display_delete_icons == "Y"}
                                                        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
                                                            {if (!$runtime.checkout || $force_items_deletion) && !$product.extra.exclude_from_calculate}
                                                                {include file="buttons/button.tpl" but_href="checkout.delete.from_status?cart_id=`$key`&redirect_url=`$r_url`" but_meta="cm-ajax cm-ajax-full-render" but_target_id="cart_status*" but_role="delete" but_name="delete_cart_item"}
                                                            {/if}
                                                        </div>
                                                    {/if}
                                                    {/hook}
                                                </li>
                                            {/if}
                                            {/hook}
                                        {/foreach}
                                    {/hook}
                                </ul>
                            {else}
                                <div class="ty-cart-items__empty ty-center">{__("cart_is_empty")}</div>
                            {/if}
                        </div>

                        {if $block.properties.display_bottom_buttons == "Y"}
                        <div class="cm-cart-buttons ty-cart-content__buttons buttons-container{if $smarty.session.cart.amount} full-cart{else} hidden{/if}">
                            <div class="ty-float-left">
                                <a href="{"checkout.cart"|fn_url}" rel="nofollow" class="ty-btn ty-btn__secondary">{__("view_cart")}</a>
                            </div>
                            {if $settings.Checkout.checkout_redirect != "Y"}
                            <div class="ty-float-right">
                                {include file="buttons/proceed_to_checkout.tpl" but_text=__("checkout")}
                            </div>
                            {/if}
                        </div>
                        {/if}

                </div>
            {/hook}
        </div>
    <!--cart_status_{$dropdown_id}--></div>
{/hook}
