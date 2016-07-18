<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160412', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160412', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );


// LOGIN LOGO AND LINK


function my_loginlogo() {
  echo '<style type="text/css">
    h1 a {
      background-image: url(' . get_template_directory_uri() . '/images/logo.png) !important;
	  box-shadow:none !important;
	   }
	   h1 a:focus {
	  box-shadow:none !important;
	   }
  </style>';
}
add_action('login_head', 'my_loginlogo');

 function put_my_url(){
    return site_url();
    }
    add_filter('login_headerurl', 'put_my_url');

	
// LIMITING OF WORDS
function content($limit) {
$content = explode(' ', get_the_content(), $limit);
if (count($content)>=$limit) {
array_pop($content);
$content = implode(" ",$content).'...';
} else {
$content = implode(" ",$content);
}	
$content = preg_replace('/\[.+\]/','', $content);
$content = apply_filters('the_content', $content); 
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}	



// Success Stories

function my_custom_post_success() {
 $labels = array(
   'name' => 'success',
   'singular_name' => 'success',
   'add_new' => 'Add success',
   'add_new_item' => 'Add New success',
   'edit_item' => 'Edit success',
   'new_item' => 'New success',
   'all_items' => 'All success',
   'view_item' => 'View success',
   'search_items' => 'Search success',
   'not_found' =>  'No success found',
   'not_found_in_trash' => 'No success found in Trash', 
   'parent_item_colon' => '',
   'menu_name' => 'Success Stories'
 );

 $args = array(
   'labels' => $labels,
   'public' => true,
   'publicly_queryable' => true,
   'show_ui' => true, 
   'show_in_menu' => true, 
   'query_var' => true,
   'capability_type' => 'post',
   'has_archive' => true, 
   'hierarchical' => false,
   'menu_position' => null,
   'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
 ); 

 register_post_type( 'success', $args ); 
}  
 add_action( 'init', 'my_custom_post_success' );

 
 
/*************************************KId's Martial Arts********************************************/



$labels = array(
		'name'              => _x( 'Kid Martial Art Location', 'Kid Martial Art Location' ),
		'singular_name'     => _x( 'Kid Martial Art Location', 'Kid Martial Art Location' ),
		'search_items'      => __( 'Search Kid Martial Art Location' ),
		'all_items'         => __( 'All Kid Martial Art Location' ),
		'parent_item'       => __( 'Parent Kid Martial Art Location' ),
		'parent_item_colon' => __( 'Parent Kid Martial Art Location' ),
		'edit_item'         => __( 'Edit Kid Martial Art Location' ),
		'update_item'       => __( 'Update Kid Martial Art Location' ),
		'add_new_item'      => __( 'Add New Kid Martial Art Location' ),
		'new_item_name'     => __( 'New Kid Martial Art Location' ),
		'menu_name'         => __( 'Kid Martial Art Location' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'martial_category' ),
	);

	register_taxonomy( 'martial_category', array( 'martial_category' ), $args );

function codex_martial() {
  $labels = array(
    'name' => 'Kid Martial Art',
    'singular_name' => 'Kid Martial Art',
    'add_new' => 'Add Kid Martial Art',
    'add_new_item' => 'Add New Kid Martial Art',
    'edit_item' => 'Edit Kid Martial Art',
    'new_item' => 'New Kid Martial Art',
    'all_items' => 'All Kid Martial Art',
    'view_item' => 'View Kid Martial Art',
    'search_items' => 'Search Kid Martial Art',
    'not_found' =>  'No Kid Martial Art found',
    'not_found_in_trash' => 'No Kid Martial Art found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Kid Martial Art'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'martials' ), 
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 10,
	'taxonomies' => array('martial_category'),
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'martials', $args );
}
add_action( 'init', 'codex_martial' );


 
/***************************************After School Program******************************************/



$labels = array(
		'name'              => _x( 'After School Program Location', 'After School Program Location' ),
		'singular_name'     => _x( 'After School Program Location', 'After School Program Location' ),
		'search_items'      => __( 'Search After School Program Location' ),
		'all_items'         => __( 'All After School Program Location' ),
		'parent_item'       => __( 'Parent After School Program Location' ),
		'parent_item_colon' => __( 'Parent After School Program Location:' ),
		'edit_item'         => __( 'Edit After School Program Location' ),
		'update_item'       => __( 'Update After School Program Location' ),
		'add_new_item'      => __( 'Add New After School Program Location' ),
		'new_item_name'     => __( 'New After School Program Location' ),
		'menu_name'         => __( 'After School Program Location' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'school_category' ),
	);

	register_taxonomy( 'school_category', array( 'school_category' ), $args );

function codex_schools() {
  $labels = array(
    'name' => 'After School Program',
    'singular_name' => 'After School Program',
    'add_new' => 'Add After School Program',
    'add_new_item' => 'Add New After School Program',
    'edit_item' => 'Edit After School Program',
    'new_item' => 'New After School Program',
    'all_items' => 'All After School Program',
    'view_item' => 'View After School Program',
    'search_items' => 'Search After School Program',
    'not_found' =>  'No After School Program found',
    'not_found_in_trash' => 'No After School Program found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'After School Program'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'schools' ), 
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 10,
	'taxonomies' => array('school_category'),
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'schools', $args );
}
add_action( 'init', 'codex_schools' );


/***************************************Summer Camp******************************************/



$labels = array(
		'name'              => _x( 'Summer Camp Location', 'Summer Camp Location' ),
		'singular_name'     => _x( 'Summer Camp Location', 'Summer Camp Location' ),
		'search_items'      => __( 'Search Summer Camp Location' ),
		'all_items'         => __( 'All Summer Camp Location' ),
		'parent_item'       => __( 'Parent Summer Camp Location' ),
		'parent_item_colon' => __( 'Parent Summer Camp Location:' ),
		'edit_item'         => __( 'Edit Summer Camp Location' ),
		'update_item'       => __( 'Update Summer Camp Location' ),
		'add_new_item'      => __( 'Add New Summer Camp Location' ),
		'new_item_name'     => __( 'New Summer Camp Location' ),
		'menu_name'         => __( 'Summer Camp Location' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'camp_category' ),
	);

	register_taxonomy( 'camp_category', array( 'camp_category' ), $args );

function codex_camp() {
  $labels = array(
    'name' => 'Summer Camp',
    'singular_name' => 'Summer Camp',
    'add_new' => 'Add Summer Camp',
    'add_new_item' => 'Add New Summer Camp',
    'edit_item' => 'Edit Summer Camp',
    'new_item' => 'New Summer Camp',
    'all_items' => 'All Summer Camp',
    'view_item' => 'View Summer Camp',
    'search_items' => 'Search Summer Camp',
    'not_found' =>  'No Summer Camp found',
    'not_found_in_trash' => 'No Summer Camp found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Summer Camp'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'camp' ), 
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 10,
	'taxonomies' => array('camp_category'),
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'camp', $args );
}
add_action( 'init', 'codex_camp' );


/***************************************Adult Martial Arts******************************************/



$labels = array(
		'name'              => _x( 'Adult Martial Arts Location', 'Adult Martial Arts Location' ),
		'singular_name'     => _x( 'Adult Martial Arts Location', 'Adult Martial Arts Location' ),
		'search_items'      => __( 'Search Adult Martial Arts Location' ),
		'all_items'         => __( 'All Adult Martial Arts Location' ),
		'parent_item'       => __( 'Parent Adult Martial Arts Location' ),
		'parent_item_colon' => __( 'Parent Adult Martial Arts Location:' ),
		'edit_item'         => __( 'Edit Adult Martial Arts Location' ),
		'update_item'       => __( 'Update Adult Martial Arts Location' ),
		'add_new_item'      => __( 'Add New Adult Martial Arts Location' ),
		'new_item_name'     => __( 'New Adult Martial Arts Location' ),
		'menu_name'         => __( 'Adult Martial Arts Location' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'adult_category' ),
	);

	register_taxonomy( 'adult_category', array( 'adult_category' ), $args );

function codex_adult() {
  $labels = array(
    'name' => 'Adult Martial Arts',
    'singular_name' => 'Adult Martial Arts',
    'add_new' => 'Add Adult Martial Arts',
    'add_new_item' => 'Add New Adult Martial Arts',
    'edit_item' => 'Edit Adult Martial Arts',
    'new_item' => 'New Adult Martial Arts',
    'all_items' => 'All Adult Martial Arts',
    'view_item' => 'View Adult Martial Arts',
    'search_items' => 'Search Adult Martial Arts',
    'not_found' =>  'No Adult Martial Arts found',
    'not_found_in_trash' => 'No Adult Martial Arts found in Trash', 
    'parent_item_colon' => '',
	'menu_name' => 'Adult Martial Arts'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'adult' ), 
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 10,
	'taxonomies' => array('adult_category'),
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'adult', $args );
}
add_action( 'init', 'codex_adult' );



//ADD IMAGE SIZE

add_image_size( 'home', 700, 571,true);
add_image_size( 'kid', 205, 326,true);
add_image_size( 'why', 1467, 796,true);
add_image_size( 'testimonial', 592, 693,true);
add_image_size( 'about', 416, 416,true);
add_image_size( 'add', 330, 475,true);
add_image_size( 'locate', 1920, 467,true);
add_image_size( 'kids-inner', 829, 783,true);
add_image_size( 'confidence', 584, 556,true);
add_image_size( 'disp', 496, 662,true);
add_image_size( 'more', 487, 514,true);
add_image_size( 'school', 583, 415,true);
add_image_size( 'always', 673, 830,true);
add_image_size( 'happy', 380, 515,true);
add_image_size( 'reliable', 69, 38,true);
add_image_size( 'power', 53, 61,true);
add_image_size( 'games', 72, 52,true);
add_image_size( 'caring', 30, 50,true);
add_image_size( 'news', 340, 340,true);
add_image_size( 'adult', 555, 489,true);
add_image_size( 'train', 473, 434,true);
add_image_size( 'self', 387, 580,true);
add_image_size( 'mental', 278, 417,true);
add_image_size( 'new', 375, 391,true);
add_image_size( 'proff', 278, 278,true);
add_image_size( 'party', 458, 305,true);
add_image_size( 'left', 223, 693,true);
add_image_size( 'right', 228, 789,true);