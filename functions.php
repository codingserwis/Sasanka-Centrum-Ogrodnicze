<?php 
/**
 * +++ +++ +++ ENQUEUE STYLES AND SCRIPTS+++ +++ +++
 */
	function addThemeStylesAndScripts() {
		wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
		wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0', true);
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