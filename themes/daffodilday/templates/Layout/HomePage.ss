<section id="stories" class="section stories">
	<div class="welcome">
		<h1>$HeaderTitle</h1>
		<h2>$HeaderSubTitle</h2>
		<div class="button-container">
			<a href="" class="button primary view-stories">View their stories</a>
			<a href="https://give.paystation.co.nz/cancer-society/donatepopup.php" target="_blank" class="button white">Donate now</a>
		</div>
	</div>
	<div class="stories-buttons">
		<a href="" class="button primary close">Close</a>
		<a href="" class="button secondary view-more">View more</a>
		<a href="" class="button secondary view-less">View less</a>
	</div>
	<div class="names">
		<div class="row">
			<% loop stories %>
			    <div class="col-xs-12 col-ms-6 col-sm-4 col-lg-3">
				    <div class="story">
				    	<div class="front">
				    		<h1 class="story-title">$Name</h3>
				    	</div>
				    	<div class="back">
				    		<p class="story-content"><span class="quote">"</span>$Story<span class="quote">"</span></p>
				    	</div>
			    	</div>
			    </div>
			<% end_loop %>
		</div>
	</div>
</section>
<section class="section daffodil">
	<div class="container">
	<img src="$ThemeDir/images/daffodil.png" width="200" height="233" alt="Daffodil Day">
		<h1><span>Daffodil Day</span> <% if SiteConfig.DaffodilDay %>$SiteConfig.DaffodilDay<% else %>25 August 2017<% end_if %></h1>
	</div>
</section>
<section id="what" class="section what">
	<div class="container">
		<h1 class="section-title">$WhatTitle</h1>
		<h2 class="section-intro">$WhatIntro</h2>
		<div class="row">
			<div class="col-sm-6">
				$WhatContent
			</div>
			<div class="col-sm-6">
				$WhatContentTwo
			</div>
		</div>
	</div>
</section>
<section id="how" class="section how bg">
	<div class="container">
		<h1 class="section-title">$DifferenceTitle</h1>
		<h2 class="section-intro">$DifferenceIntro</h2>
		<ul class="donations row">
			<% loop Donations %>
				<% if $Pos = 5 %>
				    <li class="col-sm-4 col-md-3 col-md-offset-1-5">
				    	<a href="https://give.paystation.co.nz/cancer-society/donatepopup.php" target="_blank">
					    	<div class="donation">
								<div class="donation-value"><div class="donation-circle"><span>$</span>$Value</div></div>
								<div class="donation-description">$Description</div>
							</div>
						</a>
					</li>
				<% else_if $Pos = 7 %>
				    <li class="col-sm-4 col-md-3 col-sm-offset-4 col-md-offset-0">
				    	<a href="https://give.paystation.co.nz/cancer-society/donatepopup.php" target="_blank">
					    	<div class="donation">
								<div class="donation-value"><div class="donation-circle"><span>$</span>$Value</div></div>
								<div class="donation-description">$Description</div>
							</div>
						</a>
					</li>
				<% else %>
					<li class="col-sm-4 col-md-3">
						<a href="https://give.paystation.co.nz/cancer-society/donatepopup.php" target="_blank">
					    	<div class="donation">
								<div class="donation-value"><div class="donation-circle"><span>$</span>$Value</div></div>
								<div class="donation-description">$Description</div>
							</div>
						</a>
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
		<div id="getinvolved" class="opportunities">
			<ul class="resp-tabs-list">
				<div class="row">
					<% loop opportunities %>
						<li class="col-sm-2-4">
					    	<div class="opportunity">
						    	<i class="opportunity-icon fa fa-$Icon"></i>
								<div class="opportunity-title">$Title</div>
							</div>
						</li> 
					<% end_loop %>
				</div>
			</ul>
			<div class="resp-tabs-container">                                                        
	            <% loop opportunities %>
	            	<div>$Description</div>
	            <% end_loop %>
	        </div>
        </div>
        <hr>
	</div>
</section>
<section id="merchandise" class="section merchandise">
	<div class="container">
		<h1 class="section-title">$MerchandiseTitle</h1>
		<h2 class="section-intro">$MerchandiseIntro</h2>
		<div class="button-container"><a class="button secondary" href="/store">Visit Store</a></div>
	</div>
</section>
<section id="social" class="section social bg">
	<div class="container">
		<h1 class="section-title">$SocialTitle</h1>
		<h2 class="section-intro">$SocialIntro</h2>
		<%-- <div class="section-content"></div> --%>
		<div id="social-stream"></div>
	</div>
</section>
<section id="media" class="section media">
	<div class="container">
		<h1 class="section-title">$MediaTitle</h1>
		<h2 class="section-intro">$MediaIntro</h2>
		<div class="row">
			<div class="col-sm-4">
				<div class="media-container secondary">
					<h4>Media enquiries</h4>
					<div class="media-enquiries">
						$MediaEnquiries
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="media-container primary">
					<h4>Our media releases</h4>
					<ul class="media-releases">
						<% loop MediaReleases %>
							<li class="media-release"><a href="$SinglePDF.URL">$Title</a></li>
						<% end_loop %>
					</ul>
				</div>
				<div class="media-container primary">
					<h4>Visit our links</h4>
					<ul class="media-links">
						<% loop MediaLinks %>
							<li class="media-link"><a href="$URL" target="_blank">$Title</a></li>
						<% end_loop %>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="media-container primary">
					<h4>Listen to our radio appeals</h4>
					<ul class="media-radios">
						<% loop MediaRadios %>
							<li class="media-radio"><a href="$SingleMP3.URL">$Title</a></li>
						<% end_loop %>
					</ul>
				</div>
			</div>
		</div>
		<h4>Watch our TV appeals</h4>
		<ul class="media-videos row">
			<% loop MediaVideos %>
			    <li class="media-video col-sm-6">
			    	<div class="video-container">
			    		<iframe width="555" height="312" src="$URL" frameborder="0" allowfullscreen></iframe>
			    	</div>
			    	<div class="video-description">$Description</div>
			    </li>
			<% end_loop %>
		</ul>
		<div class="row">
			<div class="col-sm-9 col-sm-offset-1-5">
				<h4>View our gallery</h4>
				<ul class="media-photos">
					<% loop ReverseMediaPhotoSort %>
					    <li class="media-photo">
					    	$SingleImage.CroppedImage(847,530)
					    	<% if Caption %>
					    	    <div class="media-photo-caption">$Caption</div>
					    	<% end_if %>
					    </li>
					<% end_loop %>
				</ul>
				<ul class="media-photos-thumbnails">
					<% loop ReverseMediaPhotoSort %>
					    <li class="media-photo-thumbnail">
					    	$SingleImage.CroppedImage(105,70)
					    </li>
					<% end_loop %>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="section contact bg">
	<div class="container">
		<h1 class="section-title">$ContactTitle</h1>
		<h2 class="section-intro">$ContactIntro</h2>
		<div class="col-sm-9 col-sm-offset-1-5">
			$Form
		</div>
	</div>
</section>