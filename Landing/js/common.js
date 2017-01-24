
$("#top_bar").removeClass("default");
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
		 $("#top_bar").addClass("default").fadeIn('fast');
		} 
		else {
		 $("#top_bar").removeClass("default").fadeIn('fast');
		};
});
	


$('.user_slider').slick({
	dots: true,
	infinite: true,
	speed: 300,
	slidesToShow: 1,
	adaptiveHeight: true
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

