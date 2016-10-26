<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="https://code.jquery.com/jquery-1.12.1.js"></script>
	<script src="js/function.js"></script>
	


	<script>
	$(document).ready(function(){
    $('.menu-item').hover(
        function() {
            $(this).addClass("active");
            //$(this).find('ul').stop(true, true); // зупинити всі анімації
            $(this).find('>ul').show();
        },
        function() {
        	$(this).find('>ul').hide('fast');
            $(this).removeClass("active");        
        }
    );
});
	</script>


	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="navbar-collapse">
						<?php wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'nav navbar-nav','container'=>'false')); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="top-wrap clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Головна</h2>
				<ul class="breadcrumb">
					<li><a href="#">Головна</a></li>
				</ul>
			</div>
		</div>
	</section>