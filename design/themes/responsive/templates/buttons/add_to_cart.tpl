{hook name="buttons:add_to_cart"}
    {assign var="c_url" value=$config.current_url|escape:url}
    {* sprint_6_show_product_price_only_for_authorized_users *}
    {assign var="vendor_id" value=$product.company_id}
    {assign var="show_price" value=$vendor_id|fn_is_necessary_to_show_price}
    {if $auth.user_id == ''}
        {if $show_price == 'off'}
            {if $settings.Checkout.allow_anonymous_shopping == "allow_shopping" || $auth.user_id}
                {include file="buttons/button.tpl" but_id=$but_id but_text=$but_text|default:__("add_to_cart") but_name=$but_name but_onclick=$but_onclick but_href=$but_href but_target=$but_target but_role=$but_role|default:"text" but_meta="ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer"}
            {else}

                {if $runtime.controller == "auth" && $runtime.mode == "login_form"}
                    {assign var="login_url" value=$config.current_url}
                {else}
                    {assign var="login_url" value="auth.login_form?return_url=`$c_url`"}
                {/if}

                {include file="buttons/button.tpl" but_id=$but_id but_text=__("sign_in_to_buy") but_href=$login_url but_role=$but_role|default:"text" but_name=""}
                <p>{__("text_login_to_add_to_cart")}</p>
            {/if}
        {else}
            <a data-ca-target-id="login_block4" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow">
                {__("login_required")}
            </a>
        {/if}
    {else}
        {if $settings.Checkout.allow_anonymous_shopping == "allow_shopping" || $auth.user_id}
            {include file="buttons/button.tpl" but_id=$but_id but_text=$but_text|default:__("add_to_cart") but_name=$but_name but_onclick=$but_onclick but_href=$but_href but_target=$but_target but_role=$but_role|default:"text" but_meta="ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer"}
        {else}

            {if $runtime.controller == "auth" && $runtime.mode == "login_form"}
                {assign var="login_url" value=$config.current_url}
            {else}
                {assign var="login_url" value="auth.login_form?return_url=`$c_url`"}
            {/if}

            {include file="buttons/button.tpl" but_id=$but_id but_text=__("sign_in_to_buy") but_href=$login_url but_role=$but_role|default:"text" but_name=""}
            <p>{__("text_login_to_add_to_cart")}</p>
        {/if}
    {/if}
    
{/hook}
{* Change the Buy now button behavior using a hook *}
{$show_buy_now = $show_buy_now scope = parent}
