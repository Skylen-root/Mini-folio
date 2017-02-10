

<footer>
	<section id="footer">
		<div class="container">
			<div class="row">
						
				<?php if ( ! dynamic_sidebar('footer_left') ) : ?>
				<?php endif; ?>
				<?php if ( ! dynamic_sidebar('footer_center') ) : ?>
				<?php endif; ?>
				<?php if ( ! dynamic_sidebar('footer_right') ) : ?>
				<?php endif; ?>


			</div>
			<div class="row">
				<div class="col-md-12 copy">
					Copyright @ 2015
				</div>
			</div>
		</div>
	</section>
</footer>

	


	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/libs/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/libs/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>
	<?php wp_footer(); ?>
</body>
</html>