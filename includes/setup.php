<?php
function elablee_setup_theme(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'starter-content', [
        'widgets'                   =>  [
            // Place three core-defined widgets in the sidebar area.
            'elablee_sidebar'            =>  [
                'text_business_info', 'search', 'text_about',
            ]
        ],

        // Create the custom image attachments used as post thumbnails for pages.
        'attachments'               =>  [
            'image-about'           =>  [
                'post_title'        =>  __( 'About', 'elablee' ),
                'file'              =>  'assets/images/about/1.jpg', // URL relative to the template-parts directory.
            ],
        ],

        // Specify the core-defined pages to create and add custom thumbnails to some of them.
        'posts'                     =>  [
            'home'                  =>  array(
                'thumbnail'         => '{{image-about}}',
            ),
            'about'                 =>  array(
                'thumbnail'         => '{{image-about}}',
            ),
            'contact'               => array(
                'thumbnail'         => '{{image-about}}',
            ),
            'blog'                  => array(
                'thumbnail'         => '{{image-about}}',
            ),
            'homepage-section'      => array(
                'thumbnail'         => '{{image-about}}',
            ),
        ],

        // Default to a static front page and assign the front and posts pages.
        'options'                   =>  [
            'show_on_front'         => 'page',
            'page_on_front'         => '{{home}}',
            'page_for_posts'        => '{{blog}}',
        ],

        // Set the front page section theme mods to the IDs of the core-registered pages.
        'theme_mods'                =>  [
            'elablee_facebook_handle'    =>  'elablee',
            'elablee_twitter_handle'     =>  'elablee',
            'elablee_instagram_handle'   =>  'elablee',
            'elablee_email'              =>  'elablee',
            'elablee_phone_number'       =>  'elablee',
            'elablee_header_show_search' =>  'yes',
            'elablee_header_show_cart'   =>  'yes',
        ],

        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus'                 =>  [
            // Assign a menu to the "top" location.
            'primary'               =>  array(
                'name'              =>  __( 'Primary Menu', 'elablee' ),
                'items'             =>  array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),

            // Assign a menu to the "social" location.
            'secondary'             =>  array(
                'name'              =>  __( 'Secondary Menu', 'elablee' ),
                'items'             =>  array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),
        ],
    ]);

    register_nav_menu( 'primary', __( 'Primary Menu', 'elablee' ) );
    register_nav_menu( 'secondary', __( 'Secondary Menu', 'elablee' ) );

    if (function_exists('quads_register_ad')){
        quads_register_ad( array(
            'location'      => 'elablee_header',
            'description'   => 'Elablee Header position'
        ));
    }
}