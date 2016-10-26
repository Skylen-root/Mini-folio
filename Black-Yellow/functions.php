<?php 
	//Мініатюри
	add_theme_support('post-thumbnails');

	    /**
		 * Enqueue scripts
		 *
		 * @param string $handle Script name
		 * @param string $src Script url
		 * @param array $deps (optional) Array of script names on which this script depends
		 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
		 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
		 */
		function theme_name_scripts() {
			wp_enqueue_script( '$handle', '$src', array( 'jquery' ), false, false);
		}
	
		add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
	
//Sidebar

   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$args = array(
		'name'          => 'widget sidebar',
		'id'            => 'sidebar',
		'description'   => 'виджеты сайдбара',
		'class'         => '',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="title"><h4>',
		'after_title'   => '</h4></div>'
	);

	register_sidebar( $args );




//Header Menu
		register_nav_menu( 'menu', 'header-menu' );


//Footer
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$args = array(
				'name'          => 'widget footer',
				'id'            => 'footer',
				'description'   => 'виджеты футера',
				'class'         => '',
				'before_widget' => '<div class="col-lg-3">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'
			);
		
			register_sidebar( $args );
		



 ?>

