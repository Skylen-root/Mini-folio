$(document).ready(function(){

  $(".owl-carousel").owlCarousel({
	items: 1,
	loop: true,
	dots: true,
	autoplay: true,
	autoplayTimeout: 7000,
	autoplayHoverPause: true
  });


	$(".nav-toggle").click(function() {
		$(".nav").slideToggle(300, function (){
			if( $(this).css('display') === 'none' ) {
				$(this).removeAttr('style');
			}
		});
	});

  


});