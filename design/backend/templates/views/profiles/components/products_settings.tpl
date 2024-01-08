{* sprint_6_show_product_price_only_for_authorized_users *}
{if !$nothing_extra}
    {include file="common/subheader.tpl" title=$title}
{/if}

<div class="control-group profile-field-show_product_price_only_for_auth_users">
    <label class="control-label cm-profile-field">{__("show_product_price_only_for_auth_users")}:</label>
    <div class="controls">      
        <input type="checkbox" id="show_product_price_only_for_auth_users" name="user_data[show_product_price_only_for_auth_users]" {if $user_data.show_product_price_only_for_auth_users == 'on'} checked {/if}>
    </div>
</div>