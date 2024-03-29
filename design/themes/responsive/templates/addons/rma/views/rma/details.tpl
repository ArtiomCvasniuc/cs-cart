<div class="ty-rma-detail clearfix">
    <div class="ty-rma-detail__actions clearfix">
        {include file="buttons/button.tpl" but_text=__("print_slip") but_href="rma.print_slip?return_id=`$return_info.return_id`" but_role="text" but_meta="cm-new-window ty-btn__text" but_icon="ty-rma-detail__actions-icon ty-icon-print"}

        {include file="buttons/button.tpl" but_text=__("related_order") but_href="orders.details?order_id=`$return_info.order_id`" but_role="text" but_meta="ty-btn__text " but_icon="ty-rma-detail__actions-icon ty-icon-arrow-left"}
    </div>
<div class="clearfix"></div>

{if $return_info}
<form action="{""|fn_url}" method="post" name="return_info_form" />
<input type="hidden" name="return_id" value="{$smarty.request.return_id}" />
<input type="hidden" name="order_id" value="{$return_info.order_id}" />
<input type="hidden" name="total_amount" value="{$return_info.total_amount}" />
<input type="hidden" name="return_status" value="{$return_info.status}" />

{hook name="orders:return_info"}
{/hook}

{capture name="tabsbox"}
{** RETURN PRODUCTS SECTION **}
    <div id="content_return_products">
        <table class="ty-table ty-rma-detail__table">
            <thead>
            <tr>
                <th class="ty-rma-detail__table-products">{__("product")}</th>
                <th class="ty-rma-detail__table-price ty-right">{__("price")}</th>
                <th class="ty-rma-detail__table-qty">{__("quantity")}</th>
                <th class="ty-rma-detail__table-reason">{__("reason")}</th>
            </tr>
        </thead>
        {foreach from=$return_info.items["Addons\\Rma\\ReturnOperationStatuses::APPROVED"|enum] item="ri" key="key"}
        <tr>
            <td>{if !$ri.deleted_product}<a href="{"products.view?product_id=`$ri.product_id`"|fn_url}">{/if}{$ri.product nofilter}{if !$ri.deleted_product}</a>{/if}
                {if $ri.product_options}
                    {include file="common/options_info.tpl" product_options=$ri.product_options}
                {/if}</td>
            <td class="ty-right ty-nowrap">
                {if !$ri.price}{__("free")}{else}{include file="common/price.tpl" value=$ri.price}{/if}</td>
            <td class="ty-center">{$ri.amount}</td>
            <td class="ty-nowrap">
                {assign var="reason_id" value=$ri.reason}
                {$reasons.$reason_id.property}</td>
        </tr>
        {foreachelse}
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items">{__("text_no_products_found")}</p></td>
        </tr>
        {/foreach}
        </table>
    </div>
{** /RETURN PRODUCTS SECTION **}

{** PROOF SECTION **}
{** sprint_4_rma_proof START **}
    <div id="content_proof" class="hidden">
        <div>
            <div class="proof_main">
                <a href="">
                    <image src="" />
                </a>
            </div>
            <div class="proof_zoom"></div>
        </div>
        <ul class="proof_thumb_list">
        {if $return_info.proof}
            {foreach from=$return_info.proof item="name" key="idx"}
                <li class="proof_thumb_item">
                    <a href="index.php?dispatch=rma.proof&return_id={$return_info.return_id}&file_name={$name}" data-standard="index.php?dispatch=rma.proof&return_id={$return_info.return_id}&file_name={$name}">
                        <img data-standard="index.php?dispatch=rma.proof&return_id={$return_info.return_id}&file_name={$name}" src="index.php?dispatch=rma.proof&return_id={$return_info.return_id}&file_name={$name}" />
                    </a>
                </li>
            {/foreach}
        {/if}
        </ul>
    </div>
{** sprint_4_rma_proof END **}
{** /PROOF SECTION **}

{** DECLINED PRODUCTS SECTION **}
    <div id="content_declined_products" class="hidden">
        <table class="ty-table ty-rma-detail__table">
        <thead>
        <tr>
                <th class="ty-rma-detail__table-products">{__("product")}</th>
                <th class="ty-rma-detail__table-price ty-right">{__("price")}</th>
                <th class="ty-rma-detail__table-qty">{__("quantity")}</th>
                <th class="ty-rma-detail__table-reason">{__("reason")}</th>
            </tr>
        </thead>
        {foreach from=$return_info.items["Addons\\Rma\\ReturnOperationStatuses::DECLINED"|enum] item="ri" key="key"}
        <tr>
            <td>
                {if !$ri.deleted_product}<a href="{"products.view?product_id=`$ri.product_id`"|fn_url}">{/if}{$ri.product nofilter}{if !$ri.deleted_product}</a>{/if}
                {if $ri.product_options}
                    {include file="common/options_info.tpl" product_options=$ri.product_options}
                {/if}</td>
            <td class="ty-right ty-nowrap">
                {if !$ri.price}{__("free")}{else}{include file="common/price.tpl" value=$ri.price}{/if}</td>
            <td class="ty-center">{$ri.amount}</td>
            <td class="ty-nowrap">
                {assign var="reason_id" value=$ri.reason}
                {$reasons.$reason_id.property}</td>
        </tr>
        {foreachelse}
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items">{__("text_no_products_found")}</p></td>
        </tr>
        {/foreach}
        </table>
    </div>
{** /DECLINED PRODUCTS SECTION **}

{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section}
{if $return_info.comment}
    <div class="ty-rma-comments">
        {include file="common/subheader.tpl" title=__("comments")}
        <div class="ty-rma-comments__body">
            <span class="ty-caret"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
            {$return_info.comment|nl2br nofilter}
        </div>
    </div>
{/if}
</form>
{/if}

{capture name="mainbox_title"}
    {__("return_info")}&nbsp;#{$return_info.return_id}
    <em class="ty-date">
        ({$return_info.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"})
    </em>
    <div class="ty-status">
        <span class="ty-rma-status">{__("status")}: {include file="common/status.tpl" status=$return_info.status display="view" name="update_return[status]" status_type=$smarty.const.STATUSES_RETURN}</span>
        <span class="ty-rma-status">{__("action")}: {assign var="action_id" value=$return_info.action}{$actions.$action_id.property}</span>
    </div>
{/capture}
</div>


{** sprint_4_rma_proof START **}
{script src="js/lib/owlcarousel/owl.carousel.js"}
{script src="js/lib/easyzoom/easyzoom.min.js"}
{script src="js/addons/rma/rma_proof.js"}
{** sprint_4_rma_proof END **}