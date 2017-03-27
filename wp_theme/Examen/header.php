<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/bootstrap/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/slick/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/media.css">


	<?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid w1170">

		<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
		<div class="navbar-brand">
		<?php if ( function_exists( 'the_custom_logo' )) {
		the_custom_logo();
		} ?>

		<p><?php bloginfo('description'); ?></p>
		</div>

		
		</div>
		<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
	
		<?php /* Primary navigation */
			wp_nav_menu( array(
				'menu' => 'top_menu',
				'depth' => 2,
				'container' => false,
				'menu_class' => 'nav navbar-nav',
				//Process nav menu using our custom nav walker
				'walker' => new wp_bootstrap_navwalker())
			);
		?>
		</div>
	</div>
</nav>




	



