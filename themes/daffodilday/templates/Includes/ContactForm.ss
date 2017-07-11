<% if $IncludeFormTag %>
<form $AttributesHTML>
<% end_if %>
	<% if $Message %>
	<p id="{$FormName}_error" class="message $MessageType">$Message</p>
	<% else %>
	<p id="{$FormName}_error" class="message $MessageType" style="display: none"></p>
	<% end_if %>

	<fieldset>
		<% if $Legend %><legend>$Legend</legend><% end_if %>
		
		<div class="form-row row">
			<div class="form-field col-sm-6">
				<label class="form-label" for="{$FormName}_Name">$Fields.dataFieldByName(Name).Title <span class="required">*</span></label>
				<div class="form-input">$Fields.dataFieldByName(Name)</div>
			</div>
			<div class="form-field col-sm-6">
				<label class="form-label" for="{$FormName}_Organisation">$Fields.dataFieldByName(Organisation).Title</label>
				<div class="form-input">$Fields.dataFieldByName(Organisation)</div>
			</div>
		</div>

		<div class="form-row row">
			<div class="form-field col-sm-6">
				<label class="form-label" for="{$FormName}_Email">$Fields.dataFieldByName(Email).Title <span class="required">*</span></label>
				<div class="form-input">$Fields.dataFieldByName(Email)</div>
			</div>
			<div class="form-field col-sm-6">
				<label class="form-label" for="{$FormName}_Phone">$Fields.dataFieldByName(Phone).Title <span class="required">*</span></label>
				<div class="form-input">$Fields.dataFieldByName(Phone)</div>
			</div>
		</div>

		<div class="form-row row">
			<div class="form-field col-sm-6">
				<label for="{$FormName}_StreetAddress">$Fields.dataFieldByName(StreetAddress).Title <span class="required">*</span></label>
				<div class="form-input">$Fields.dataFieldByName(StreetAddress)</div>
			</div>
			<div class="form-field col-sm-6">
				<label class="form-label" for="{$FormName}_City">$Fields.dataFieldByName(City).Title <span class="required">*</span></label>
				<div class="form-input">$Fields.dataFieldByName(City)</div>
			</div>
		</div>

		<div class="form-row row">
			<div class="form-field col-sm-6">
				<label class="form-label" for="{$FormName}_Postcode">$Fields.dataFieldByName(Postcode).Title <span class="required">*</span></label>
				<div class="form-input">$Fields.dataFieldByName(Postcode)</div>
			</div>
			<div class="form-field col-sm-6">
				<label class="form-label" for="{$FormName}_NearestRegion">$Fields.dataFieldByName(NearestRegion).Title <span class="required">*</span></label>
				<div class="form-input">$Fields.dataFieldByName(NearestRegion)</div>
			</div>
		</div>

		<div class="form-row row">
			<div class="form-field col-sm-12">
				<label class="form-label" for="{$FormName}_WhatIsYourEnquiry">$Fields.dataFieldByName(WhatIsYourEnquiry).Title <span class="required">*</span></label>
				<div class="form-input">$Fields.dataFieldByName(WhatIsYourEnquiry)</div>
			</div>
		</div>

		<div class="form-row row">
			<div class="form-field col-sm-12">
				$Fields.dataFieldByName(ContactCaptcha)
			</div>
		</div>

		<div class="clear"><!-- --></div>
	</fieldset>

	<% if $Actions %>
	<div class="Actions">
		<% loop $Actions %>
			$Field
		<% end_loop %>
	</div>
	<% end_if %>
<% if $IncludeFormTag %>
</form>
<% end_if %>
