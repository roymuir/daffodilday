$( document ).ready(function() {

	// Mobile menu
	$('#menu-button').on('click', function (e) {
		e.preventDefault();
		$('.overlay').addClass('overlay-open');
	});
	$('.overlay-close, .overlay .scroll-link').on('click', function (e) {
		e.preventDefault();
		$('.overlay').removeClass('overlay-open');
	});



	// Smooth scrolling links
	$('.scroll-link').on('click', function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
    


    // Stories
	if($('.stories').length) {
		var storyWidth = $('.story').outerWidth();

		$('.story').height(storyWidth);

		$('.story').on({
		    mouseenter: function () {
		        $(this).flip(true);
		    },
		    mouseleave: function () {
		        $(this).flip(false);
		    }
		});

		$('.story').flip();
	}



	// Get involved accordion

	$('.opportunities').easyResponsiveTabs();



	// Social stream
	if($('#social-stream').length) {
		$('#social-stream').dcSocialStream({
			feeds: {
				twitter: {
					url: '/themes/daffodilday/php/twitter.php',
					id: 'NZCancerSo,DaffodilDay_NZ'
				},
				facebook: {
					url: '/themes/daffodilday/php/facebook.php',
					id: '174949225876112'
				},
				instagram: {
					/*accessTokern :'186786085.cac0b53.d6447ce3eb9f4570a150fd20ff98bf10'*/
					accessToken: '186786085.cac0b53.d6447ce3eb9f4570a150fd20ff98bf10',
					clientId: '7d860cf2da6b436a9ff9f7feb727f58e',
					id: '!2233965950,#love'
				}
			},
			style: {
				layout: 'modern',
				colour: 'dark'
			},
			wall: true,
			rotate: {
				delay: 0
			},
			filter: false,
			control: false,
			center: true,
			cache: false,
			max: 'limit',
			limit: 3,
			debug: true
		});
	}



	// Gallery/Slider
	$('.media-photos').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.media-photos-thumbnails'
	});
	$('.media-photos-thumbnails').slick({
		infinite: true,
		slidesToShow: 8,
		slidesToScroll: 1,
		asNavFor: '.media-photos',
  		focusOnSelect: true
	});



	// Form validation
	jQuery('#Form_Form').validate({
        rules: {
            Name: 'required',
            Email: {
                required: true,
                email: true
            },
            StreetAddress: 'required',
            City: 'required',
            Postcode: {
                required: true,
                digits: true,
                rangelength: [4,4]
            },
            NearestRegion: 'required',
            WhatIsYourEnquiry: 'required'
        },
        messages: {
            Name: 'Please enter your name',
            Email: {
            	required: 'Please enter your email address',
            	email: 'Please enter a valid email address'
            },
            StreetAddress: 'Please enter your street address',
            City: 'Please enter your city',
            Postcode:  {
            	required: 'Please enter your postcode',
            	digits: 'Please enter a valid postcode',
            	rangelength: 'Please enter a valid postcode'
            },
			NearestRegion: 'Please select your nearest region',
            WhatIsYourEnquiry: 'Please enter your enquiry',
        }
    });

});