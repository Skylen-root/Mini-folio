<?php get_header(); ?>

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
						<div class="slider-testimonials-slide">
							<img src="wp-content/uploads/2017/02/slide-img-1.jpg" alt="photo">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut esse molestias ex, quos similique cum?</p>
						</div>
						<div class="slider-testimonials-slide">
							<img src="wp-content/uploads/2017/02/slide-img-2.jpg" alt="photo">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut esse molestias ex, quos similique cum?</p>
						</div>
						<div class="slider-testimonials-slide">
							<img src="wp-content/uploads/2017/02/slide-img-3.jpg" alt="photo">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut esse molestias ex, quos similique cum?</p>
						</div>
					</div>

					<div class="slider-testimonials-nav">
						<div class="slider-testimonials-nav-slide">
							<div class="img-wrap">
								<img src="wp-content/uploads/2017/02/slide-img-1-150x150.jpg" alt="photo">
							</div>
						</div>
						<div class="slider-testimonials-nav-slide">
							<div class="img-wrap">
								<img src="wp-content/uploads/2017/02/slide-img-2-150x150.jpg" alt="photo">
							</div>
						</div>
						<div class="slider-testimonials-nav-slide">
							<div class="img-wrap">
								<img src="wp-content/uploads/2017/02/cropped-slide-img-3-150x150.jpg" alt="photo">
							</div>
						</div>
					</div>

	</section>


<?php get_footer(); ?>