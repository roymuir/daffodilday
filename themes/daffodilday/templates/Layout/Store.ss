<h1 class="page-title">$Title</h1>
<h2 class="page-intro">Orders can only be made and sent within New Zealand.</h2>

<% if CurrentMember  %>
    <p>View your order history <a href="/account">here</a>.</p>
<% else %>
	<p>Login <a href="/Security/login">here</a> to view your account and recent purchases.</p>    
<% end_if %>
<div class="row">
	<div class="col-sm-8 col-md-9">
		<div class="row">
			<% loop $Children %>
			    <div class="col-sm-6">
			    	<div class="product">
			    		<a href="$Link">
				    		$SingleImage.CroppedImage(555,390)
				    	</a>
				    	<h3 class="product-title">$Title</h3>
				    	<div class="product-price">$Price.Nice</div>
				    	<a href="$Link" class="button secondary">View product</a>
			    	</div>
			    </div>
			<% end_loop %>
		</div>
	</div>
	<div class="col-sm-4 col-md-3">
		<% include CartBlock %>
	</div>
</div>