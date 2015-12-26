<?php
/**
 * Apple Tree functions file
 *
 * @package WordPress
 * @subpackage Apple Tree
 * @since Apple Tree 1.0
 */


/******************************************************************************\
	Theme support, standard settings, menus and widgets
\******************************************************************************/

add_theme_support( 'post-formats', array( 'image', 'quote', 'status', 'link' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

$custom_header_args = array(
	'width'         => 150,
	'height'        => 150,
	'default-image' => get_template_directory_uri() . '/images/logo.png',
);
add_theme_support( 'custom-header', $custom_header_args );

/**
 * Print custom header styles
 * @return void
 */
/*function appletree_custom_header() {
	$styles = '';
	if ( $color = get_header_textcolor() ) {
		echo '<style type="text/css"> ' .
				'.site-header .logo .blog-name, .site-header .logo .blog-description {' .
					'color: #' . $color . ';' .
				'}' .
			 '</style>';
	}
}
add_action( 'wp_head', 'appletree_custom_header', 11 );*/

$custom_bg_args = array(
	'default-color' => 'fbf7ee',
	'default-image' => '',
);
add_theme_support( 'custom-background', $custom_bg_args );




register_nav_menu( 'main-menu', __( 'Your sites main menu', 'appletreesg.com' ) );

function appletree_load_theme_textdomain() {
	load_theme_textdomain('appletreesg.com', get_template_directory() . '/languages/');
}
add_action('after_setup_theme', 'appletree_load_theme_textdomain');

function appletree_set_locale($lang) {
    /*$uri = $_SERVER['REQUEST_URI'];
    if (strpos($uri, '/zh/') == 0) {
        return 'zh_CN';
    }
    return 'en_US';*/
	if(isset($_GET['lang']))
	{
		$language = $_GET['lang'];
		if($language =='zh')
			return 'zh_CN';
		else
			return 'en_US';
	}
	else
	{
		return $lang;
	}
}
add_filter('locale', 'appletree_set_locale');




/*if ( function_exists( 'register_sidebars' ) ) {
	register_sidebar(
		array(
			'id' => 'home-sidebar',
			'name' => __( 'Home widgets', 'appletreesg.com' ),
			'description' => __( 'Shows on home page', 'appletreesg.com' )
		)
	);

	register_sidebar(
		array(
			'id' => 'footer-sidebar',
			'name' => __( 'Footer widgets', 'appletreesg.com' ),
			'description' => __( 'Shows in the sites footer', 'appletreesg.com' )
		)
	);
}*/

/*if ( ! isset( $content_width ) ) $content_width = 650;*/

/**
 * Include editor stylesheets
 * @return void
 */
/*function appletree_editor_style() {
    add_editor_style( 'css/wp-editor-style.css' );
}
add_action( 'init', 'appletree_editor_style' );*/


/******************************************************************************\
	Scripts and Styles
\******************************************************************************/

/**
 * Enqueue appletree scripts
 * @return void
 */
/*function appletree_enqueue_scripts() {
	wp_enqueue_style( 'appletree-styles', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'default-scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0', true );
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'appletree_enqueue_scripts' );*/


/******************************************************************************\
	Content functions
\******************************************************************************/

/**
 * Displays meta information for a post
 * @return void
 */
function appletree_post_meta() {
	if ( get_post_type() == 'post' ) {
		echo sprintf(
			__( 'Posted %s in %s%s by %s. ', 'appletreesg.com' ),
			get_the_time( get_option( 'date_format' ) ),
			get_the_category_list( ', ' ),
			get_the_tag_list( __( ', <b>Tags</b>: ', 'appletreesg.com' ), ', ' ),
			get_the_author_link()
		);
	}
	edit_post_link( __( ' (edit)', 'appletreesg.com' ), '<span class="edit-link">', '</span>' );
}