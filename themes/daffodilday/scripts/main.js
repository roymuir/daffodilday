$( document ).ready(function() {

	// Mobile menu
	$('#menu-button').on('click', function (e) {
		e.preventDefault();
		$('.overlay').addClass('overlay-open');
		$('body').css('overflow', 'hidden');
	});
	$('.overlay-close, .overlay .scroll-link').on('click', function (e) {
		e.preventDefault();
		$('.overlay').removeClass('overlay-open');
		$('body').css('overflow', '');
	});



	// Navigation
	$('.scroll-link').on('click', function (e) {
	    e.preventDefault();

	    var mobile = $(this).closest($('.overlay'));
	    var target = this.hash;
	    var $target = $(target);
	    var scrollOffset = 65;

	    if(mobile.length) {
	    	var scrollOffset = 30;
	    }

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top - scrollOffset
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});

	$(document).on('scroll', onScroll);

	function onScroll(event){
	    var scrollPos = $(document).scrollTop();

	    $('.section').each(function(i) {
            if ($(this).position().top <= scrollPos + 70) {
                $('.nav-items a.active').removeClass('active');
                $('.nav-items a').eq(i-1).addClass('active');
            }
        });
	}

	if ($('.mobile-menu').is(':visible')) {
		var previousScroll = 0;

		$(window).scroll(function(){

	    	var currentScroll = $(this).scrollTop();

	    	if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height()){

				if (currentScroll > previousScroll){
					window.setTimeout(hideNav, 300);
				} else {
					window.setTimeout(showNav, 300);
				}

				previousScroll = currentScroll;
			}

			function hideNav() {
				$('.main-nav').removeClass("is-visible").addClass("is-hidden");
			}
			function showNav() {
				$('.main-nav').removeClass("is-hidden").addClass("is-visible");
			}

		});
	}



    // Stories
	if($('.stories').length) {

		$('.view-stories').on('click', function (e) {
	    	e.preventDefault();

	    	var headerHeight = $('.welcome').outerHeight();

	    	$('.story').flip();

	    	$('.section.stories').height(headerHeight);
	    	$('.welcome').fadeOut(function() {
	    		$('.names').fadeIn();
	    		$('.stories-buttons').fadeIn();
	    		stories(headerHeight);
	    	});
	    	
		});

		function stories(headerHeight) {
			var storyWidth = $('.story').outerWidth();

			$('.story').height((headerHeight - 60) / 2);

			if ($(window).width() < 768) {
				$('.story').on('touch', function () {
					$(this).flip();
				});
			} else {
				$('.story').on('mouseenter', function () {
					$(this).flip(true);
				});

				$('.story').on('mouseleave', function () {
					$(this).flip(false);
				});
			}
		}

		$('.stories-buttons').css('top', $('.stories').outerHeight()+80);

		var totalStories = $('.names .story').length;

	    if ($(window).width() < 468) {
	    	totalRows = totalStories / 2;
	    } else if ($(window).width() >= 468 &&  $(window).width() <= 768) {
		    totalRows = totalStories / 4;
		} else if ($(window).width() >= 768 &&  $(window).width() <= 992) {
		    totalRows = totalStories / 6;
		} else if ($(window).width() > 992) {
		    totalRows = totalStories / 6;
		}

		var row = 1;
		
		$('.stories-buttons .view-more').on('click', function (e) {
	    	e.preventDefault();

	    	var currentPos = $('.names').offset().top - 70;
	    	row ++;

	    	$('.names').animate({top: currentPos - $('.stories').outerHeight()});

	    	if (row == 2) {
	    		$('.view-less').show();
	    	}

	    	if (row == totalRows) {
	    		$('.view-more').hide();
	    	}
	    });

	    $('.stories-buttons .view-less').on('click', function (e) {
	    	e.preventDefault();

	    	var currentPos = $('.names').offset().top - 70;
	    	row --;

	    	$('.names').animate({top: currentPos + $('.stories').outerHeight()});

	    	if (row == totalRows-1) {
	    		$('.view-more').show();
	    	}

	    	if (row == 1) {
	    		$(this).hide();
	    	}
	    });

	    $('.stories-buttons .close').on('click', function (e) {
	    	e.preventDefault();

	    	$('.names').fadeOut(function() {
	    		$('.welcome').fadeIn();
	    		$('.names').css('top', 0);
	    		row = 1;
	    		$('.view-more').show();
	    		$('.view-less').hide();
	    	});

	    	$('.stories-buttons').fadeOut();

	    });
		
	}



	// Get involved accordion
	if($('.opportunities').length) {
		$('.opportunities').easyResponsiveTabs();
	}



	// Social stream
	if($('#social-stream').length) {
		$('#social-stream').dcSocialStream({
			feeds: {
				twitter: {
					url: '/themes/daffodilday/php/twitter.php',
					id: 'DaffodilDay_NZ,#daffodilday'
				},
				facebook: {
					url: '/themes/daffodilday/php/facebook.php',
					id: '174949225876112'
				}/*,
				instagram: {
					//accessToken :'186786085.cac0b53.d6447ce3eb9f4570a150fd20ff98bf10'
					accessToken: '186786085.cac0b53.d6447ce3eb9f4570a150fd20ff98bf10',
					clientId: '7d860cf2da6b436a9ff9f7feb727f58e',
					id: '!2233965950,#love'
				}*/
			},
			style: {
				layout: 'modern'
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
	if($('.media-photos').length) {
		$('.media-photos').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			asNavFor: '.media-photos-thumbnails',
			prevArrow: '<button type="button" class="slick-prev"></button>',
	  		nextArrow: '<button type="button" class="slick-next"></button>'
		});
		$('.media-photos-thumbnails').slick({
			infinite: true,
			slidesToShow: 8,
			slidesToScroll: 1,
			asNavFor: '.media-photos',
	  		focusOnSelect: true,
	  		prevArrow: '<button type="button" class="slick-prev"></button>',
	  		nextArrow: '<button type="button" class="slick-next"></button>'
		});
	}



	// Form validation
	if($('#Form_Form').length) {
		$('#Form_Form').validate({
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
	            Phone: 'Please enter your phone number',
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
	}

});