<?php 

// +++ +++ +++ CUSTOM MENUS +++ +++ +++
	function myCustomMenus(){
		$locations = array(
							'header_menu' => 'Main Menu',
							'footer_menu' => 'Footer Menu'
						);
		register_nav_menus( $locations );
	}

	add_action('init', 'myCustomMenus' );

// +++ +++ +++ ADD POST THUMBNAILS +++ +++ +++
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
	}

// +++ +++ +++ REMOVE THE SCROLL OF MORE LINK +++ +++ +++
	function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );