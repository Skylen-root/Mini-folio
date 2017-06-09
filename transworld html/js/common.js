$(document).ready(function() {
	
$(".menu-toggle").click(function() {
	$("#site-navigation").toggleClass("collapse");
});


//  owl-carousel slider top
$('.owl-carousel').owlCarousel({
	loop: true,
	nav: true,
	dots: false,
	items: 1,
	animateOut: 'fadeOut',
	navContainerClass: "slider-control",
	navClass: ["arrow arrow-prev","arrow arrow-next"],
	navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>Prev','Next<i class="fa fa-long-arrow-right" aria-hidden="true"></i>']
});



});