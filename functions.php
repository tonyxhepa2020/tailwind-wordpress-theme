<?php

// Setup
define( 'Elablee_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/custom-nav-walker.php' ) );
include( get_theme_file_path( '/includes/widgets.php' ) );
include( get_theme_file_path( '/includes/theme-customizer.php' ) );
include( get_theme_file_path( '/includes/customizer/social.php' ) );
include( get_theme_file_path( '/includes/customizer/misc.php' ) );
include( get_theme_file_path( '/includes/customizer/home-section.php' ) );
include( get_theme_file_path( '/includes/customizer/enqueue.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'elablee_enqueue' );
add_action( 'after_setup_theme', 'elablee_setup_theme' );
add_action( 'widgets_init', 'elablee_widgets' );
add_action( 'customize_register', 'elablee_customize_register' );
add_action( 'customize_preview_init', 'elablee_customize_preview_init' );

// Shortcodes



// filters

function max_title_length( $title,  $max = 150) {

    if ( strlen( $title ) > $max ) {
        return substr( $title, 0, $max ) . ' &hellip;';
    } else {
        return $title;
    }
}
add_filter( 'the_title', 'max_title_length' );