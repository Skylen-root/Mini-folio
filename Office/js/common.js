$(document).ready(function(){ 

$('.slider-main').slick({
	dots: true,
	infinite: true,
	speed: 500,
	fade: true,
	cssEase: 'linear'
});

$('.masonry-grid').masonry({
	itemSelector: '.masonry-item',
	singleMode: false,
	isResizable: true,
	fitWidth: true,
	isAnimated: true,
	animationOptions: { 
	queue: false, 
	duration: 500 
	}
}); 

$('.carousel-clients').slick({
	infinite: true,
	slidesToShow: 8,
	slidesToScroll: 1,
	dots: false,
	responsive: [{

		breakpoint: 1650,
		settings: {
		slidesToShow: 6,
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



	

});
