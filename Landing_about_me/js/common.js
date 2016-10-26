$(document).ready(function() {
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