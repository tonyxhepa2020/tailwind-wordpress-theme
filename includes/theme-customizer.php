<?php

function elablee_customize_register( $wp_customize ){

    $wp_customize->get_section( 'title_tagline' )->title    =   'General';

    $wp_customize->add_panel( 'elablee', [
        'title'         =>  __( 'Elablee', 'elablee' ),
        'description'   =>  '<p>Elablee Theme Settings</p>',
        'priority'      =>  160
    ]);

    elablee_social_customizer_section( $wp_customize );
    elablee_misc_customizer_section( $wp_customize );
    elablee_misc_customizer_home_section( $wp_customize );
}