{if $smarty.request.user_type == "UserTypes::CUSTOMER"|enum && $can_view_orders}
    <td class="row-status" data-th="{__("comc.credit")}">
    	{if $user.commercial_credit_enabled == 'A'}
    	<span>{$user.commercial_credit}</span> / 
    	<span>{$user.commercial_credit_limit}</span>
    	{/if}
    </td>
{/if}