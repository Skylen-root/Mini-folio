<?php
/*
Template Name: Examen News
*/
?>


<?php get_header(); ?>

	<section id="latest_news" class="transparent">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="s_title">
						<div class="in-line">
							<h2>News</h2>
						</div>
					</div>
				</div>
			</div>

			 <?php 
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('' . '&paged='.$paged);
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
	
	

<?php get_footer(); ?>