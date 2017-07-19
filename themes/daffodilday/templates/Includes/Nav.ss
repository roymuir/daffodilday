<nav class="main-nav" id="nav">
	<div class="container">
		<div class="row">
			<div class="logo col-xs-9 col-lg-2">
				<a href="/">
				<img src="$ThemeDir/images/daffodil-day-logo.png" width="170" height="60" alt="Daffodil Day">
				</a>
			</div>
			<div class="desktop-menu col-xs-10">
				<ul class="nav-items">
					<li><a href="#what" class="scroll-link"><% with $Page(home) %>$WhatTitle<% end_with %></a></li>
					<li><a href="#how" class="scroll-link"><% with $Page(home) %>$DifferenceTitle<% end_with %></a></li>
					<li><a href="#involved" class="scroll-link"><% with $Page(home) %>$InvolvedTitle<% end_with %></a></li>
					<li><a href="#merchandise" class="scroll-link"><% with $Page(home) %>$MerchandiseTitle<% end_with %></a></li>
					<li><a href="#social" class="scroll-link"><% with $Page(home) %>$SocialTitle<% end_with %></a></li>
					<li><a href="#media" class="scroll-link"><% with $Page(home) %>$MediaTitle<% end_with %></a></li>
					<li><a href="#contact" class="scroll-link"><% with $Page(home) %>$ContactTitle<% end_with %></a></li>
					<li><a href="#" class="button secondary">Donate</a></li>
				</ul>
			</div>
			<div class="mobile-menu col-xs-3 col-lg-10">
				<div id="menu-button">
			  		<a href="#">Menu</a>
				</div>
				<div class="overlay overlay-data">
			  		<a href="" class="overlay-close">CLOSE</a>
				    <ul>
						<li><a href="/" class="scroll-link">Home</a></li>
						<li><a href="#what" class="scroll-link"><% with $Page(home) %>$WhatTitle<% end_with %></a></li>
						<li><a href="#how" class="scroll-link"><% with $Page(home) %>$DifferenceTitle<% end_with %></a></li>
						<li><a href="#involved" class="scroll-link"><% with $Page(home) %>$InvolvedTitle<% end_with %></a></li>
						<li><a href="#merchandise" class="scroll-link"><% with $Page(home) %>$MerchandiseTitle<% end_with %></a></li>
						<li><a href="#social" class="scroll-link"><% with $Page(home) %>$SocialTitle<% end_with %></a></li>
						<li><a href="#media" class="scroll-link"><% with $Page(home) %>$MediaTitle<% end_with %></a></li>
						<li><a href="#contact" class="scroll-link"><% with $Page(home) %>$ContactTitle<% end_with %></a></li>
				    </ul>
				</div>
			</div>
		</div>
	</div>
</nav>