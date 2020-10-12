<?php

function elablee_enqueue(){
    $uri                =   get_theme_file_uri();
    $ver                =   Elablee_DEV_MODE ? time() : false;

    wp_register_style(
        'elablee_google_fonts',
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',
        [],
        $ver
    );
    wp_register_style( 'elablee_custom', $uri . '/assets/css/custom.css', [], $ver );
    wp_register_style( 'elablee_tailwind', $uri . '/css/theme.css', [], $ver );

    wp_enqueue_style( 'elablee_google_fonts' );
    wp_enqueue_style( 'elablee_tailwind' );

    $read_more_color                =   get_theme_mod( 'elablee_read_more_color' );
    wp_add_inline_style(
        'elablee_theme',
        'a.more-link{ color: ' . $read_more_color . '; border-color: '. $read_more_color. '; }'
    );

    wp_register_script( 'elablee_alpine', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js', [], $ver, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'elablee_alpine' );

}