<?php
/*
Template Name: Examen
*/
?>

<?php get_header(); ?>
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

			<div class="news">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row news_item">
					
					<div class="col-md-12">
						<div class="content single-page">
							<?php the_post_thumbnail('', 'class=post_thumbnail_single'); ?>
							<h3 class="news_title">
								<?php the_title( ); ?>
							</h3>
							<div class="news_date">
								posted <?php the_date('d.m.y'); ?>
							</div>
							<div class="news_data">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</div>


			 


		</div>
	</section>


<?php get_footer(); ?>