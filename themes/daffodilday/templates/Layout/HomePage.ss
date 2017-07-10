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
		<div class="section-content">$WhatContent</div>
	</div>
</section>
<section id="how" class="section how">
	<div class="container">
		<h1 class="section-title">$DifferenceTitle</h1>
		<div class="section-content">$DifferenceContent</div>
	</div>
</section>
<section id="social" class="section social">
	<div class="container">
		<h1 class="section-title">Social Title</h1>
		<div class="section-content"></div>
		<div id="social-stream"></div>
	</div>
</section>