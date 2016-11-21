$(document).ready(function() {

	//animate
	$(".top_text h1").animated("fadeInDown","fadeOutUp");
	$(".top_text p, .sec_header").animated("fadeInUp","fadeOutDown");
	$("#about .col-md-4:nth-child(2), .left .resume_item").animated("fadeInLeft","");
	$("#about .col-md-4:nth-child(1)").animated("flipInY","");
	$("#about .col-md-4:nth-child(3), .right .resume_item").animated("fadeInRight","");

	//popup
	 $('.popup').magnificPopup({type:'image'});

	//resize height
	function heightDetect(){
		$(".main_head").css("height", $(window).height());
	}
	heightDetect();
	$(window).resize(function(){
		heightDetect();
	})
	//

	//.toggle_menu
	$(".toggle_menu").click(function(){
		if ($(".top_menu").is(":visible")) {
			$(".top_menu").fadeOut(600);
		}
		else {
		$(".top_menu").fadeIn(600);
		};
	});

	$(".top_menu a").click(function(){
		$(".top_menu").fadeOut(600);
		$(".sandwich").toggleClass("active");
	});
//

$(".toggle_menu, .menu_item").click(function() {
  $(".sandwich").toggleClass("active");
});



});