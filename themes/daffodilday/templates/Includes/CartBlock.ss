<div class="cart-block">
	<h3>Your cart</h3>
	<% if $Cart.Items %>
		<table>
			<thead>
				<tr>
					<th><%t CartForm.PRODUCT 'Product' %></th>
					<th><%t CartForm.PRICE 'Price' %></th>
					<th><%t CartForm.Qty 'Qty' %></th>
					<th><%t CartForm.TOTAL 'Total' %></th>
				</tr>
			</thead>
			<tbody>
				<% loop $Cart.Items %>
					<tr>
						<td>
							<a href="$Product.Link">$Product.Title</a>
						</td>
						<td>
							$UnitPrice.Nice
						</td>
						<td>
							$Quantity
						</td>
						<td>
							$TotalPrice.Nice
						</td>
					</tr>
				<% end_loop %>
				<tr>
					<td colspan="3">
						&nbsp;
					</td>
					<td>
						$Cart.CartTotalPrice.Nice
					</td>
				</tr>
			</tbody>
		</table>
		<a href="$CartLink" class="cart-link">Edit your cart</a>
		<a href="/checkout" class="checkout-link">Go to checkout</a>
	<% else %>
		<p>There are no items in your cart</p>
	<% end_if %>
</div>