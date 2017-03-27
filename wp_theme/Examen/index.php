<?php get_header(); ?>

<section id="slider_top">
	<div class="slider">
		<ul>
			<?php
			$count=1;
			$args = array( 'post_type' => 'slider-main', 'posts_per_page' => 10 );//тут мы указываем на тип записи по которой желаем пройтись и количество записей на одной странице
			$loop = new WP_Query( $args );// получаем результат запроса в переменное loop
			while ( $loop->have_posts() ) : $loop->the_post(); // далее стандартная итерация по массиву
			echo "<li class='slide-$count'>";
			//the_title();// заголовок
			//the_post_thumbnail(array(150,150)); //получаем миниатюру записи
			//the_content();// запись
			$image = get_field('slide-img');
			echo "<img src=" . $image['url'] . " />";
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
					<div class="icon experience"></div>
					<p>Experience</p>
				</div>
			</div>
		</div>
	</div>

</section>

<section id="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="s_title">
						<div class="in-line">
							<h2>About us</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<iframe width="100%" height="315" src="https://www.youtube.com/embed/SwU7U5U9-Zc" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat tempora earum sed iure doloribus, asperiores quidem obcaecati voluptas necessitatibus, aperiam vero eveniet quasi facilis repellendus delectus possimus accusantium. Architecto, exercitationem?</p>
							<ol>
								<li>Lorem ipsum dolor sit amet.</li>
								<li>Repellat tempora earum sed iure doloribus</li>
								<li>Asperiores quidem obcaecati voluptas necessitatibus</li>
								<li>Aperiam vero eveniet quasi facilis repellendus delectus possimus accusantium</li>
								<li>Architecto, exercitationem</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="latest_news" class="transparent">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="s_title">
						<div class="in-line">
							<h2>Latest news</h2>
						</div>
					</div>
				</div>
			</div>

			


			 <?php 
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('showposts=2' . '&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

					<div class="row news_item">
						<div class="col-md-12">
							<?php the_post_thumbnail('', 'class=post_thumbnail'); ?>

							<div class="content">
								<h3 class="news_title">
									<a href="<?php the_permalink(); ?>" title="Read more"><?php the_title( ); ?></a>
								</h3>
								<div class="news_date">
									posted <?php the_date('d.m.y'); ?>
								</div>
								<div class="news_data">
									<?php the_excerpt(); ?>
								</div>
							</div>
						</div>
						<a href="<?php the_permalink() ?>" class="read" title="<?php the_title(); ?>" >read more</a>
					</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>


		</div>
	</section>
	
	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="s_title">
						<div class="in-line"><h2>Testimonials</h2></div>
					</div>
				</div>
			</div>
		</div>

					<div class="slider-testimonials">

						<?php
							$args = array( 'post_type' => 'slider-testimonials', 'posts_per_page' => 10 );//тут мы указываем на тип записи по которой желаем пройтись и количество записей на одной странице
							$loop = new WP_Query( $args );// получаем результат запроса в переменное loop
							while ( $loop->have_posts() ) : $loop->the_post(); // далее стандартная итерация по массиву
							echo '
							<div class="slider-testimonials-slide">
								<img src="'. get_the_post_thumbnail_url() .'" alt="photo">
								<p>'. get_the_content() .'</p>
							</div>
						';
							//the_title();// заголовок
							//the_post_thumbnail(array(150,150)); //получаем миниатюру записи
							//the_content();// запись
							//$image = get_field('slider-testimonials-img');
							//echo "<img src=" . $image['url'] . " />";
							endwhile;
						?>
					
					</div>

					<div class="slider-testimonials-nav">
					<?php
							$args = array( 'post_type' => 'slider-testimonials', 'posts_per_page' => 10 );//тут мы указываем на тип записи по которой желаем пройтись и количество записей на одной странице
							$loop = new WP_Query( $args );// получаем результат запроса в переменное loop
							while ( $loop->have_posts() ) : $loop->the_post(); // далее стандартная итерация по массиву
							echo '
							<div class="slider-testimonials-nav-slide">
								<div class="img-wrap">
									<img src="'. get_the_post_thumbnail_url() .'" alt="photo">
								</div>
							</div>
						';
							endwhile;
						?>
					
					</div>

	</section>


<?php get_footer(); ?>