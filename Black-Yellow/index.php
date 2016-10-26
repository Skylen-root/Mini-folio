<?php get_header(); ?>

	<section class="blog-wrapper">
		<div class="container">
			
				<div id="content" class="col-lg-9 col-md-9">
					
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post"><h3><a href="<?php the_permalink_rss(); ?>"><?php the_title( ); ?></a></h3>
					<div class="post-meta">
						<a href=""><?php the_date('d.m.y'); ?></a>
						<a href="">Коментарі(0)</a>
						<a href="">Автор:</a>
					</div>
					<div class="blog-desc">
					<?php the_post_thumbnail('', 'class=post_thumbnail'); ?>
					<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>



				
					
					
					
					
				<hr>
				</div>
				<?php get_sidebar(); ?>
			
		</div>
	</section>


<?php get_footer(); ?>