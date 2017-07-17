<% include Header %>

<% include Nav %>

<div class="main-content" id="content">
	<% if $URLSegment == 'home' %>
		$Layout
	<% else %>
		<div class="container">
			$Layout
		</div>
	<% end_if %>
</div>

<% include Footer %>