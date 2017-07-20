<h1 class="page-title">$Product.Title</h1>

<div class="row">
	<div class="col-sm-8 col-md-9">

		<div class="product-meta">
			
			$SingleImage.CroppedImage(825,550)
			<div class="product-number">Item #$Product.ItemNumber</div>
			<h3 class="product-price-js">$Product.Price.Nice</h3>
		
			<div class="add-to-cart">
				$ProductForm(1)
			</div>
		</div>

		<div class="product-description">
			$Product.Content
		</div>

	</div>

	<div class="col-sm-4 col-md-3">
		<% include CartBlock %>
	</div>
</div>