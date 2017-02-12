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


<section id="slider_top">
	<div class="slider">
		<ul>
			<?php
			$count=1;
			$args = array( 'post_type' => 'movie_reviews', 'posts_per_page' => 10 );//тут мы указываем на тип записи по которой желаем пройтись и количество записей на одной странице
			$loop = new WP_Query( $args );// получаем результат запроса в переменное loop
			while ( $loop->have_posts() ) : $loop->the_post(); // далее стандартная итерация по массиву
			echo "<li class='slide-$count'>";
			the_title();// заголовок
			the_post_thumbnail(array(150,150)); //получаем миниатюру записи
			echo '';
			the_content();// запись
			echo '</li>';
			$count++;
			endwhile;
			?>
		</ul>
		<div class="slider-control">
			<?php
			for ($i=1; $i< $count ; $i++) {
				echo "<span class='slide-nav slide-nav-$i' show-slide='$i'>$i</span>";
			}
			?>
		</div>
	</div>

	<div class="slider_info">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="icon service"></div>
					<p>Good service</p>
				</div>
				<div class="col-md-4">
					<div class="icon performance"></div>
					<p>Hight performance</p>
				</div>
				<div class="col-md-4">
					<div class="icon experience">50</div>
					<p>Experience</p>
				</div>
			</div>
		</div>
	</div>

</section>

	



