$(window).load(function() {

	$(".preloader_inner").fadeOut();
	$(".preloader").delay(400).fadeOut("slow");

	

}); 


$(document).ready(function() {

	//animate
	$(".top_text h1").animated("fadeInDown","fadeOutUp");
	$(".top_text p, .sec_header").animated("fadeInUp","fadeOutDown");
	$("#about .col-md-4:nth-child(2), .left .resume_item").animated("fadeInLeft","");
	$("#about .col-md-4:nth-child(1)").animated("flipInY","");
	$("#about .col-md-4:nth-child(3), .right .resume_item").animated("fadeInRight","");



	//popup
	$('.popup').magnificPopup({type:'image'});

	$('.portfolio_gallery_img').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery:{
		enabled:true,
		overflowY: 'scroll',
		fixedContentPos: 'false'
		},
		zoom: {
			enabled: true,
			duration: 300,
			opener: function(element) {
				return element.find('img');
			}
		}
	});

	//resize height
	function heightDetect(){
		$(".main_head").css("height", $(window).height());
	}
	heightDetect();
	$(window).resize(function(){
		heightDetect();
	})

	function heightDetect2(){
		$(".main_head").css("height", $(window).height());
	}
	heightDetect();
	$(window).resize(function(){
		heightDetect2();
	})
	//

	//#nav-icon

// $("#nav-icon").click(function() {
//   $("#nav-icon").toggleClass("close");
// });

	// $(window).resize(function() {
	// 	if ( $(window).width() > 768 ) {
	// 		$(".top_menu").fadeIn(0);
	// 	}
	// 	else {
	// 		$(".top_menu").fadeOut(0);
	// 	}
	// })


	$("#nav-icon").click(function(){
		if ( $(".top_menu").is(":visible") ) {
			// $(".top_menu").fadeOut(600);
			// $("#nav-icon").toggleClass("close");
		}
		else {
			$("#nav-icon").toggleClass("close");
			$(".top_menu").fadeIn(600);
		};
	});

	$(".top_menu a").click(function(){						// клік по пункту меню
		if ( $(window).width() <= 768 ) {
			$(".top_menu").fadeOut(600, function() {
				if ( $(this).css('display') === 'none' ) {
					$(this).removeAttr("style");
				}
			});
			$("#nav-icon").toggleClass("close");
		}
	});

	$(document).mouseup(function (e){							// клік за межами меню
		  var container = $(".top_menu");
			if (!container.is(e.target) && container.has(e.target).length === 0 && $(window).width() <= 768) {
			container.fadeOut(600, function() {
				if ( $(this).css('display') === 'none' ) {
					$(this).removeAttr("style");
				}
			});
				if ( $("#nav-icon").hasClass("close") ) {
					$("#nav-icon").toggleClass("close");
				}
		  }
		});




// scroll2id

$(".top_menu ul li a").click(function () {
	$(".top_menu ul li a").mPageScroll2id({
		scrollEasing: "linear",
		scrollSpeed: 600
});
})



// $(".to_top").mPageScroll2id({
// 	scrollSpeed: 300,
// 	scrollEasing: "easeOutQuint"
// });

$(".to_top").click( function () {
	$(this).mPageScroll2id({
		scrollEasing: "linear",
		scrollSpeed: 300
});
}

	
	)



// scroll to_top
$(window).scroll(function(){
				if ($(this).scrollTop() > 300) {
					$(".to_top").show("fast");
				} else {
					$(".to_top").hide("fast");
				};
			});

// contact form
// $("#form").submit(function() {
// 		$.ajax({
// 			type: "POST",
// 			url: "https://docs.google.com/forms/d/e/1FAIpQLScY1l9C3DdThIImU7qzMHQE5Pr3Ri7Q3-Pw03Zh6UQ1LAHKzg/formResponse?embedded=true",
// 			data: $(this).serialize()
// 		}).done(function() {
// 			$(this).find("input").val("");
// 			alert("Дякую за повідомлення, відповім найближчим часом");
// 			$("#form").trigger("reset");
// 		});
// 		return false;
// 	});
//











});