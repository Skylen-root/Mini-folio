//$("#slider_top").css("height", $(window).height());



$('.slide-nav:first-child').addClass('slide-nav-on');
$('.slider li:first-child').addClass('show');

$('.slide-nav').click (
	function () {
		$('.slide-nav:first-child').removeClass('slide-nav-on');
		$('.slide-nav').removeClass('slide-nav-on');
		$(this).addClass('slide-nav-on');

		var name = $(this).attr('show-slide');
		//$('.slider ul li').css('opacity','0');
		//$('.slide-'+name).css('opacity','1');

		$('.slider li').removeClass('show');
		//$('.slide-'+name+' img').addClass('show')
		$('.slide-'+name).addClass('show');
		// $('.slider ul li').hide();
		// $('.slide-'+name).show(600);

	}
);

//  Slider Testimonials

$('.slider-testimonials').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	dots: false,
	centerMode: true,
	infinite: true,
	variableWidth: true,
	focusOnSelect: true,
	asNavFor: '.slider-testimonials-nav'
});
$('.slider-testimonials-nav').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	asNavFor: '.slider-testimonials',
	dots: false,
	arrows: false,
	centerMode: true,
	centerPadding: '60px',
	focusOnSelect: true,
	variableWidth: true,
	//infinite: true
});



//.toggle_menu
	$(".toggle_menu").click(function(){
		if ($("#top-bar nav").is(":visible")) {
			$("#top-bar nav").fadeOut(600);
		}
		else {
		$("#top-bar nav").fadeIn(600);
		};
	});

	$("#top-bar nav a").click(function(){
		$("#top-bar nav").fadeOut(600);
		$(".sandwich").toggleClass("active");
	});

	$(".toggle_menu, .menu_item").click(function() {
	  $(".sandwich").toggleClass("active");
	});
//**************************