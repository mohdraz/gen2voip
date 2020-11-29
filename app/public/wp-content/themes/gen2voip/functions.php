<?php

function gen2voip_enqueue_styles() {
    $parenthandle = 'parent-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(), 
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') 
    );
}

add_action( 'wp_enqueue_scripts', 'gen2voip_enqueue_styles' );



/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gen2voip_sidebar_registration() {

	// Partner Logos.
	register_sidebar(
		array_merge(
			array(
				'name'        => __( 'Partner Logos', 'twentytwenty' ),
				'id'          => 'partner_logos',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'gen2voip_sidebar_registration' );


// gent2voip admin options
require get_stylesheet_directory() . '/inc/function-admin-options.php';
require get_stylesheet_directory() . '/inc/enqueue.php';