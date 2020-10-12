<?php

function elablee_social_customizer_section( $wp_customize ){
    $wp_customize->add_setting( 'elablee_facebook_handle', [
        'default'   =>  ''
    ]);

    $wp_customize->add_setting( 'elablee_twitter_handle', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting( 'elablee_instagram_handle', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting( 'elablee_email', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting( 'elablee_phone_number', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_section( 'elablee_social_section', [
        'title'     =>  __( 'Elablee Social Settings', 'elablee' ),
        'priority'  =>  30,
        'panel'     =>  'elablee'
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'elablee_social_facebook_input',
        array(
            'label'          => __( 'Facebook Handle', 'elablee' ),
            'section'        => 'elablee_social_section',
            'settings'       => 'elablee_facebook_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'elablee_social_twitter_input',
        array(
            'label'                 =>  __( 'Twitter Handle', 'elablee' ),
            'section'               => 'elablee_social_section',
            'settings'              => 'elablee_twitter_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'elablee_social_instagram_input',
        array(
            'label'                 =>  __( 'Instagram Handle', 'elablee' ),
            'section'               => 'elablee_social_section',
            'settings'              => 'elablee_instagram_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'elablee_social_email_input',
        array(
            'label'                 =>  __( 'Email', 'elablee' ),
            'section'               => 'elablee_social_section',
            'settings'              => 'elablee_email',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'elablee_social_phone_number_input',
        array(
            'label'                 =>  __( 'Phone Number', 'elablee' ),
            'section'               => 'elablee_social_section',
            'settings'              => 'elablee_phone_number',
            'type'                  =>  'text'
        )
    ));
}