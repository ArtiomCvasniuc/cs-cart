<h4 class="subheader hand" data-toggle="collapse" data-target="#add_comc">
	{__('comc.credit_long')}
	<span class="icon-caret-down"></span>
</h4>
<div id="add_comc" class="collapsed in">
	<div class="control-group">
		<label class="control-label" for="commercial_credit_enabled">{__('status')}:</label>
		<div class="controls">
			<label class="radio inline" for="commercial_credit_enabled_a"><input type="radio" name="addons[commercial_credit_enabled]" id="commercial_credit_enabled_a" {if $user_data.commercial_credit_enabled == 'A'}checked="checked"{/if} value="A" />{__('active')}</label>
			<label class="radio inline" for="commercial_credit_enabled_b"><input type="radio" name="addons[commercial_credit_enabled]" id="commercial_credit_enabled_b" {if $user_data.commercial_credit_enabled == 'D'}checked="checked"{/if} value="D" />{__('disabled')}</label>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="commercial_credit_limit">{__('limit')}:</label>
		<div class="controls">
			<input type="text" name="addons[commercial_credit_limit]" id="commercial_credit_limit" value="{$user_data.commercial_credit_limit}" />
		</div>
	</div>
</div>