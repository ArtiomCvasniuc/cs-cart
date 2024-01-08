{if $smarty.request.user_type == "UserTypes::CUSTOMER"|enum && $can_view_orders}
    <th width="10%">
    	<a
    	class="cm-ajax"
    	href="{"`$c_url`&sort_by=commercial_credit&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>
    		{__("comc.credit")}
    		{if $search.sort_by == "commercial_credit"}
    			{$c_icon nofilter}
    		{else}
    			{$c_dummy nofilter}
    		{/if}
    	</a>
	</th>
{/if}