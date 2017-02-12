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

			register_sidebar(
				$args = array(
					'name'          => 'widget footer-left',
					'id'            => 'footer_left',
					'description'   => 'виджеты футера слева',
					'class'         => '',
					'before_widget' => '<div class="col-md-3">',
					'after_widget'  => '</div>',
					'before_title'  => '<h4>',
					'after_title'   => '</h4>'
				)
			);
			register_sidebar(
				$args = array(
					'name'          => 'widget footer-center',
					'id'            => 'footer_center',
					'description'   => 'виджеты футера по центру',
					'class'         => '',
					'before_widget' => '<div class="col-md-6">',
					'after_widget'  => '</div>',
					'before_title'  => '<h4>',
					'after_title'   => '</h4>'
				)
			 );
			register_sidebar(
				$args = array(
					'name'          => 'widget footer-right',
					'id'            => 'footer_right',
					'description'   => 'виджеты футера по справа',
					'class'         => '',
					'before_widget' => '<div class="col-md-3">',
					'after_widget'  => '</div>',
					'before_title'  => '<h4>',
					'after_title'   => '</h4>'
				)
			 );
		





// Custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 38,
		'width'       => 148,
		'class'		  => 'navbar-brand',
		'flex-height' => true,
		'flex-width'  => true,
	) );


// Change WP default sub menu class

	function change_submenu_class($menu) {
		$menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);

		return $menu;
	}
	add_filter('wp_nav_menu','change_submenu_class');






// Register custom navigation walker
	/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
	 require_once('wp_bootstrap_navwalker.php');



 ?>



