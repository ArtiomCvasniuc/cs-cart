{if $commercial_credit_info }
<tr>
    <td class="ty-checkout-summary__item ty-checkout-summary__credit">{__("comc.credit")}</td>
    <td class="ty-checkout-summary__item">{$commercial_credit_info.commercial_credit}/{$commercial_credit_info.commercial_credit_limit}</td>
</tr>
{/if}