<div class="ty-rma-register">
    <form action="{""|fn_url}" method="post" name="return_registration_form" enctype="multipart/form-data">
    <input name="order_id" type="hidden" value="{$smarty.request.order_id}" />
    <input name="user_id" type="hidden" value="{$order_info.user_id}" />

    {if $actions}
        <div class="ty-rma-register__actions">
            <strong>{__("what_you_would_like_to_do")}:</strong>
            <select class="ty-rma-register__action-select" name="action">
                {foreach from=$actions item="action" key="action_id"}
                    <option value="{$action_id}">{$action.property}</option>
                {/foreach}
            </select>
        </div>
    {/if}

    <table class="ty-table ty-rma-register__table">
    <thead>
        <tr>
            <th class="ty-center"><input type="checkbox" name="check_all" value="Y" title="{__("check_uncheck_all")}" class="checkbox cm-check-items" /></th>
            <th>{__("product")}</th>
            <th class="ty-right">{__("price")}</th>
            <th>{__("quantity")}</th>
            <th>{__("reason")}</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$order_info.products item="oi" key="key"}
        <tr>
            <td class="ty-center ty-rma-register-id">
                <input type="checkbox" name="returns[{$oi.cart_id}][chosen]" id="delete_checkbox" value="Y" class="checkbox cm-item" />
                <input type="hidden" name="returns[{$oi.cart_id}][product_id]" value="{$oi.product_id}" />
            </td>
            <td style="width: 60%" class="ty-left"><a href="{"products.view?product_id=`$oi.product_id`"|fn_url}">{$oi.product nofilter}</a>
                {if $oi.product_options}
                    {include file="common/options_info.tpl" product_options=$oi.product_options}
                {/if}
            </td>
            <td class="ty-right ty-nowrap">
                {if $oi.extra.exclude_from_calculate}{__("free")}{else}{include file="common/price.tpl" value=$oi.price}{/if}
            </td>
            <td class="ty-center">
                <input type="hidden" name="returns[{$oi.cart_id}][available_amount]" value="{$oi.amount}" />
                <select name="returns[{$oi.cart_id}][amount]">
                {section name=$key loop=$oi.amount+1 start="1" step="1"}
                        <option value="{$smarty.section.$key.index}">{$smarty.section.$key.index}</option>
                {/section}
                </select>
            </td>
            <td class="ty-center">
                {if $reasons}
                    <select name="returns[{$oi.cart_id}][reason]">
                    {foreach from=$reasons item="reason" key="reason_id"}
                        <option value="{$reason_id}">{$reason.property}</option>
                    {/foreach}
                    </select>
                {/if}
            </td>
        </tr>
    {foreachelse}
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items">{__("no_items")}</p></td>
        </tr>
    {/foreach}
    </tbody>
    </table>

    {** sprint_4_rma_proof START **}
    <div class="ty-rma-proof">
        <p>{__("rma_proof.image_upload_disclaimer")}</p>
        {include file="common/fileuploader.tpl"
                var_name="ty-rma-proof__image_var[]"
                multiupload="Y"
                hidden_name="ty-rma-proof__image"
                hidden_value="ty-rma-proof__image"
                label_id="ty-rma-proof__label"
                prefix="proof"
        }
    </div>
    {** sprint_4_rma_proof END **}

    <div class="ty-rma-register__comments">
        <strong class="ty-rma-register__comments-title">{__("type_comment")}</strong>
        <textarea name="comment" cols="3" rows="4" class="ty-rma-register__comments-textarea"></textarea>
    </div>

    {** sprint_4_rma_proof START **}
    <div class="ty-rma-policy_confirmation">
        <label for="accept_terms">
            <input type="checkbox" id="accept_terms" name="accept_terms" required />
            {capture name="terms_link"}
                <a id="policy" class="cm-combination ty-dashed-link" target="_blank" href="/returns-and-exchanges-{$smarty.const.CART_LANGUAGE}/">Return policy terms</a>
            {/capture}
            {__("checkout_terms_n_conditions", ["[terms_href]" => $smarty.capture.terms_link])}
        </label>
        <input type="hidden" value="N" name="policy_confirmation" required />
    </div>
    <script>
        $("#accept_terms").on("change", function(evt) {
            let inp = $("input[name='policy_confirmation']");
            if(this.checked) {
                inp.val('Y');
            } else {
                inp.val('N');
            }
        });
    </script>
    {** sprint_4_rma_proof END **}

    <div class="ty-rma-register__buttons buttons-container">
        {include file="buttons/button.tpl" but_text=__("rma_return") but_name="dispatch[rma.add_return]" but_meta="ty-btn__secondary cm-process-items"}
    </div>

    </form>
</div>

{capture name="mainbox_title"}{__("return_registration")}{/capture}