<nav class="main-nav" id="nav">
	<div class="container">
		<div class="logo">
			<a href="/">
			<img src="$ThemeDir/images/dd-anz-logo.png" width="215" height="53" alt="Daffodil Day and ANZ">
			</a>
		</div>
		<div class="desktop-menu">
			<ul class="nav-items">
				<li><a href="/#what" <% if URLSegment == home %>class="scroll-link"<% end_if %>><%-- <% with $Page(home) %>$WhatTitle<% end_with %> --%>About</a></li>
				<li><a href="/#how" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$DifferenceTitle<% end_with %></a></li>
				<li><a href="/#involved" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$InvolvedTitle<% end_with %></a></li>
				<li><a href="/#merchandise" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$MerchandiseTitle<% end_with %></a></li>
				<li><a href="/#social" <% if URLSegment == home %>class="scroll-link"<% end_if %>><%-- <% with $Page(home) %>$SocialTitle<% end_with %> --%>Social</a></li>
				<li><a href="/#media" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$MediaTitle<% end_with %></a></li>
				<li><a href="/#contact" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$ContactTitle<% end_with %></a></li>
				<li><a href="https://give.paystation.co.nz/cancer-society/donatepopup.php" target="_blank" class="button secondary">Donate</a></li>
			</ul>
		</div>
		<div class="mobile-menu">
			<div id="menu-button">
		  		<a href="#">Menu</a>
			</div>
			<div class="overlay overlay-data">
		  		<a href="" class="overlay-close">CLOSE</a>
			    <ul>
					<li><a href="/#what" <% if URLSegment == home %>class="scroll-link"<% end_if %>><%-- <% with $Page(home) %>$WhatTitle<% end_with %> --%>About</a></li>
					<li><a href="/#how" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$DifferenceTitle<% end_with %></a></li>
					<li><a href="/#involved" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$InvolvedTitle<% end_with %></a></li>
					<li><a href="/#merchandise" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$MerchandiseTitle<% end_with %></a></li>
					<li><a href="/#social" <% if URLSegment == home %>class="scroll-link"<% end_if %>><%-- <% with $Page(home) %>$SocialTitle<% end_with %> --%>Social</a></li>
					<li><a href="/#media" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$MediaTitle<% end_with %></a></li>
					<li><a href="/#contact" <% if URLSegment == home %>class="scroll-link"<% end_if %>><% with $Page(home) %>$ContactTitle<% end_with %></a></li>
					<li><a href="https://give.paystation.co.nz/cancer-society/donatepopup.php" target="_blank">Donate</a></li>
			    </ul>
			</div>
		</div>
	</div>
</nav>