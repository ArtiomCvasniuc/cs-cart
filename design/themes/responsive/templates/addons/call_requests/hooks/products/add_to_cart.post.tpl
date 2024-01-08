{if !$hide_form
    && $addons.call_requests.buy_now_with_one_click == "Y" 
    && ($auth.user_id 
        || $settings.Checkout.allow_anonymous_shopping == "allow_shopping"
    ) && $show_buy_now|default:true
}

    {* sprint_6_show_product_price_only_for_authorized_users *}
    {assign var="vendor_id" value=$product.company_id}
    {assign var="show_price" value=$vendor_id|fn_is_necessary_to_show_price}
    {if $auth.user_id == ''}
        {if $show_price == 'off'}

            {include file="common/popupbox.tpl"
                href="call_requests.request?product_id={$product.product_id}&obj_prefix={$obj_prefix}"
                link_text=__("call_requests.buy_now_with_one_click")
                text=__("call_requests.buy_now_with_one_click")
                id="call_request_{$obj_prefix}{$product.product_id}"
                link_meta="ty-btn ty-btn__text ty-cr-product-button"
                content=""
            }

        {/if}
    {else}

        {include file="common/popupbox.tpl"
            href="call_requests.request?product_id={$product.product_id}&obj_prefix={$obj_prefix}"
            link_text=__("call_requests.buy_now_with_one_click")
            text=__("call_requests.buy_now_with_one_click")
            id="call_request_{$obj_prefix}{$product.product_id}"
            link_meta="ty-btn ty-btn__text ty-cr-product-button"
            content=""
        }

    {/if}

{/if}