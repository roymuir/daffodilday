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
		<ul class="donations row">
			<% loop Donations %>
				<% if $Pos = 5 %>
				    <li class="donation col-sm-4">
						<div class="donation-value">$Value</div>
						<div class="donation-description">$Description</div>
					</li>
				<% else_if $Pos = 6 %>
					 <li class="donation col-sm-4">
						<div class="donation-value">$Value</div>
						<div class="donation-description">$Description</div>
					</li>
				<% else_if $Pos = 7 %>
					 <li class="donation col-sm-4">
						<div class="donation-value">$Value</div>
						<div class="donation-description">$Description</div>
					</li>	
				<% else %>
					<li class="donation col-sm-3">
						<div class="donation-value">$Value</div>
						<div class="donation-description">$Description</div>
					</li>
				<% end_if %>
			<% end_loop %>
		</ul>
	</div>
</section>
<section id="involved" class="section involved">
	<div class="container">
		<h1 class="section-title">$InvolvedTitle</h1>
		<h2 class="section-intro">$InvolvedIntro</h2>
		<div class="opportunities">
			<ul class="resp-tabs-list row">
				<% loop opportunities %>
					<% if First %>
					    <li class="opportunity col-sm-2 col-sm-offset-1">
							<div class="opportunity-icon">$Icon</div>
							<div class="opportunity-title">$Title</div>
						</li> 
					<% else %>   
						<li class="opportunity col-sm-2">
							<div class="opportunity-icon">$Icon</div>
							<div class="opportunity-title">$Title</div>
						</li> 
					<% end_if %>
				<% end_loop %>
			</ul>
			<div class="resp-tabs-container">                                                        
	            <% loop opportunities %>
	            	<div>$Description</div>
	            <% end_loop %>
	        </div>
        </div>
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
		<h4>Watch our TV appeals</h4>
		<ul class="media-videos row">
			<% loop MediaVideos %>
			    <li class="media-video col-sm-6">
			    	<div class="video-container">
			    		<iframe width="555" height="312" src="$URL" frameborder="0" allowfullscreen></iframe>
			    	</div>
			    	$Description
			    </li>
			<% end_loop %>
		</ul>
		<div class="row">
			<div class="col-sm-9">
				<ul class="media-photos">
					<% loop MediaPhotos %>
					    <li class="media-photo">
					    	$SingleImage.CroppedImage(847,530)
					    	$Caption
					    </li>
					<% end_loop %>
				</ul>
				<ul class="media-photos-thumbnails">
					<% loop MediaPhotos %>
					    <li class="media-photo-thumbnail">
					    	$SingleImage.CroppedImage(100,63)
					    </li>
					<% end_loop %>
				</ul>
			</div>
			<div class="col-sm-3">
				<h4>Listen to our radio appeals</h4>
				<ul class="media-radios">
					<% loop MediaRadios %>
						<li class="media-radio"><a href="$SingleMP3.URL">$Title</a></li>
					<% end_loop %>
				</ul>
				<h4>Our media releases</h4>
				<ul class="media-releases">
					<% loop MediaReleases %>
						<li class="media-release"><a href="$SinglePDF.URL">$Title</a></li>
					<% end_loop %>
				</ul>
				<h4>Visit our links</h4>
				<ul class="media-links">
					<% loop MediaLinks %>
						<li class="media-link"><a href="$URL" target="_blank">$Title</a></li>
					<% end_loop %>
				</ul>
			</div>
		</div>
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