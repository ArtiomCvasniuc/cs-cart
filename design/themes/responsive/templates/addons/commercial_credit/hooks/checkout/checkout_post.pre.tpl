{if $commercial_credit_info }
<li class="ty-cart-statistic__item ty-statistic-list-credit-summary">
    <span class="ty-cart-statistic__title">{__('comc.credit')}:</span>
    <span class="ty-cart-statistic__value">{$commercial_credit_info.credit} / {$commercial_credit_info.limit}</span>
</li>
{/if}