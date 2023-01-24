<?php
/**
*
* @Packge      Crysa
* @Author      validthemes
* @Author URL  https://themeforest.net/user/validthemes/portfolio
* @version     1.0.0
*
*/
/**
 * Enqueue style of child theme
 */
if ( !function_exists( 'crysa_child_theme_cfg_parent' ) ):
function crysa_child_theme_cfg_parent(){
	$parent_style = 'crysa-parent-style'; 
	wp_enqueue_style($parent_style, get_parent_theme_file_uri("/style.css"));
	wp_enqueue_style( "crysa-child-style",
	        get_stylesheet_directory_uri() . '/style.css',
	        array( $parent_style ),
	        wp_get_theme()->get('Version')
	    );
}
endif;
add_action( 'wp_enqueue_scripts', 'crysa_child_theme_cfg_parent');
?>