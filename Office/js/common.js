 $(document).ready(function(){ 
	$('.masonry-grid').masonry({
// указываем элемент-контейнер в котором расположены блоки для динамической верстки
	  itemSelector: '.masonry-item',
// указываем класс элемента являющегося блоком в нашей сетке
		  singleMode: false,
// true - если у вас все блоки одинаковой ширины
	  isResizable: true,
	  fitWidth: true,
// перестраивает блоки при изменении размеров окна
	  isAnimated: true,
// анимируем перестроение блоков
		  animationOptions: { 
		  queue: false, 
		  duration: 500 
	  }
// опции анимации - очередь и продолжительность анимации
	}); 



  });



$(document).ready(function(){
	$('.carousel-clients').slick({
		// varibleWidth: true,
		// respondTo: 'min',
		infinite: true,
		// adaptiveHeight: true,
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
		slidesToShow: 1,
		 }
	}]
	});



	$('.slider-main').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	});

});


$('.imgfill').imagefill();


$('.masonry-grid').magnificPopup({
	delegate: 'a',
	type:'image',
	 gallery:{
	enabled:true
  }
});




$(".toggle_menu").click(function(){
	if($(window).width() < 768) {
		if ($(".navigation-top").is(":visible")) {
			$(".navigation-top").fadeOut(300);
		}
		else {
		$(".navigation-top").fadeIn(300);
		};
	}
	});

	$(".navigation-top a").click(function(){
		if( $(window).width() < 768 ) {
			$(".navigation-top").fadeOut(300);
			$(".sandwich").toggleClass("active");
		}
	});

$(window).resize(function(){			  
	if( $(window).width() > 768 ) {
		$(".navigation-top").fadeIn(300);
	}
	else {
		$(".navigation-top").fadeOut(300);
	}
});
