<section id="stories" class="section stories">
	<div class="">
		<div class="row">
			<% loop stories %>
			    <div class="col-xs-6 col-sm-4 col-md-2">
				    <div class="story">
				    	<div class="front">
				    		<h3 class="story-title">$Name</h3>
				    	</div>
				    	<div class="back">
				    		<p class="story-content">$Story</p>
				    	</div>
			    	</div>
			    </div>
			<% end_loop %>
		</div>
	</div>
</section>
<section id="what" class="section what">
	<div class="container">
		<h1 class="section-title">$WhatTitle</h1>
		<h2 class="section-intro">$WhatIntro</h2>
		<div class="section-content">$WhatContent</div>
	</div>
</section>
<section id="how" class="section how">
	<div class="container">
		<h1 class="section-title">$DifferenceTitle</h1>
		<h2 class="section-intro">$DifferenceIntro</h2>
		<div class="section-content">$DifferenceContent</div>
	</div>
</section>
<section id="merchandise" class="section merchandise">
	<div class="container">
		<h1 class="section-title">$MerchandiseTitle</h1>
		<h2 class="section-intro">$MerchandiseIntro</h2>
		<div class="button-container"><a class="button primary" href="#">Visit Store</a></div>
	</div>
</section>
<section id="media" class="section media">
	<div class="container">
		<h1 class="section-title">$MediaTitle</h1>
		<h2 class="section-intro">$MediaIntro</h2>
	</div>
</section>
<section id="social" class="section social">
	<div class="container">
		<h1 class="section-title">$SocialTitle</h1>
		<h2 class="section-intro">$SocialIntro</h2>
		<%-- <div class="section-content"></div> --%>
		<div id="social-stream"></div>
	</div>
</section>
<section id="contact" class="section contact">
	<div class="container">
		<h1 class="section-title">$ContactTitle</h1>
		<h2 class="section-intro">$ContactIntro</h2>
		$Form
	</div>
</section>