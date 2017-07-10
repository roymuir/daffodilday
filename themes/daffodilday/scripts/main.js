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

});