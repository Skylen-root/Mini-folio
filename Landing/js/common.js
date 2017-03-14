
$('.top-slider').slick({
	dots: false,
	infinite: true,
	speed: 600,
	adaptiveHeight: true,
	fade: true,
	slidesToShow: 1,
	adaptiveHeight: true,
	autoplay: true,
	autoplaySpeed: 5000
});

$('.user_slider').slick({
	dots: true,
	infinite: true,
	speed: 600,
	slidesToShow: 1,
	adaptiveHeight: true,
	autoplay: true,
  autoplaySpeed: 5000
});


$('.brand_slider').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 1,
			responsive: [{
			breakpoint: 1650,
			settings: {
				slidesToShow: 4,
				infinite: true
			}

		}, {

			breakpoint: 1280,
			settings: {
				slidesToShow: 4,
			}

		}, {

			breakpoint: 878,
			settings: {
				slidesToShow: 2,
				 }
		}]
	});

$(document).ready(function() {

	$('.footer_gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
	});
});


//  parallax
$('header').parallax({imageSrc: 'img/bg2.jpg'});