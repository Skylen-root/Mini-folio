<?php 
	include_once('advanced-custom-fields/acf.php');		//плагин Advanced Custom Fields
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





// testing custom post type "slider-main"
add_action( 'init', 'create_post_type_testimonials' );
	function create_post_type_testimonials() {
	register_post_type( 'slider-testimonials',
		array(
			'labels' => array(
				'name' => __( 'Отзывы сотрудников' ),
				'singular_name' => __( 'Отзив' )
			),
		'public'             => true,
		'has_archive'        => true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
		)
	);
}

// testing custom post type "slider-main"
add_action( 'init', 'create_post_type' );
	function create_post_type() {
	register_post_type( 'slider-main',
		array(
			'labels' => array(
				'name' => __( 'Слайдер' ),
				'singular_name' => __( 'Слайд' )
			),
			'public' => true,
			'has_archive'	=> true,
		)
	);
}

// testing custom fields "meta-test"
add_action('add_meta_boxes', 'metatest_init'); 
add_action('save_post', 'metatest_save'); 

function metatest_init() { 
	add_meta_box('metatest', 'MetaTest-параметр поста', 
	'metatest_showup', '', 'advanced', 'default'); 
}

	function metatest_showup($post, $box) { 
	// получение существующих метаданных 
	$data = get_post_meta($post->ID, '_metatest_data', true); 
	// скрытое поле с одноразовым кодом 
	wp_nonce_field('metatest_action', 'metatest_nonce'); 
	// поле с метаданными 
	echo '<p>Метаданные: <input type="text" name="metadata_field" value="' . esc_attr($data) . '"/></p>'; 
} 

function metatest_save($postID) { 
// пришло ли поле наших данных? 
	if (!isset($_POST['metadata_field'])) 
	return; 
	// не происходит ли автосохранение? 
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
	return; 
	// не ревизию ли сохраняем? 
	if (wp_is_post_revision($postID)) 
	return; 
	// проверка достоверности запроса 
	check_admin_referer('metatest_action', 'metatest_nonce'); 
	// коррекция данных 
	$data = sanitize_text_field($_POST['metadata_field']); 
	// запись 
	update_post_meta($postID, '_metatest_data', $data); 
} 
// testing custom fields "meta-test" END !!!






//поле плагина Advanced Custom Fields
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_%d1%81%d0%bb%d0%b0%d0%b9%d0%b4%d0%b5%d1%80-%d0%bf%d0%be%d0%bb%d0%b5',
		'title' => 'Слайдер-поле',
		'fields' => array (
			array (
				'key' => 'field_58d6dceecb9c7',
				'label' => 'Картинка',
				'name' => 'slide-img',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'large',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'slider-main',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
}

 ?>