<?php 
/**
 * Enable ACF 5 early access
 * Requires at least version ACF 4.4.12 to work
 */
define('ACF_EARLY_ACCESS', '5');

/**
 * +++ +++ +++ ENQUEUE STYLES AND SCRIPTS+++ +++ +++
 */
	function addThemeStylesAndScripts() {
		$styleVer = filemtime(get_template_directory() . '/assets/css/main.css');
		$scriptVer = filemtime(get_template_directory() . '/assets/js/app.js');
		
		wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), $styleVer, 'all');
		wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Oswald|Roboto:100,300&amp;subset=latin-ext', array(), null);
		wp_enqueue_script( 'fa', 'https://use.fontawesome.com/b1f95d1c43.js', array(), null, false );
		wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), $scriptVer, true);
	}

	add_action('wp_enqueue_scripts', 'addThemeStylesAndScripts');
/**
 *	+++ +++ +++ CUSTOM MENUS +++ +++ +++
 */ 
	function myCustomMenus(){
		$locations = array(
							'header_menu' => 'Main Menu',
							'footer_menu' => 'Footer Menu'
						);
		register_nav_menus( $locations );
	}

	add_action('init', 'myCustomMenus' );

/**
 * +++ +++ +++ ADD POST THUMBNAILS +++ +++ +++
 */ 
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
	}

/** 
 * +++ +++ +++ REMOVE THE SCROLL OF MORE LINK +++ +++ +++
 */ 
	function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );