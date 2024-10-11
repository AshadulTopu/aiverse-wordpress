<?php

/**
 * Customizer additions.
 *
 * @package aiverse
 */

 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}


/**
 * Added Panels & Sections
 */
function aiverse_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'aiverse_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Ai Verse Customizer', 'aiverse' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'aiverse' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( 'header_top_setting_color', [
        'title'       => esc_html__( 'Header Menu Color', 'aiverse' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'aiverse' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'aiverse' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'aiverse' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'aiverse' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'aiverse' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'aiverse' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'aiverse' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'aiverse' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'aiverse' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'aiverse_customizer',
    ] );

}

add_action( 'customize_register', 'aiverse_customizer_panels_sections' );



/**
 * Customizer Settings
 */

 /**
  * Header Top Setting
  */

  function _header_top_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'aiverse_btnone_switch',
        'label'    => esc_html__( 'Button One Swicher', 'aiverse' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'aiverse' ),
            'off' => esc_html__( 'Disable', 'aiverse' ),
        ],
    ];
    // $fields[] = [
    //     'type'     => 'switch',
    //     'settings' => 'aiverse_btntwo_switch',
    //     'label'    => esc_html__( 'Button Two Swicher', 'aiverse' ),
    //     'section'  => 'header_top_setting',
    //     'default'  => '0',
    //     'priority' => 10,
    //     'choices'  => [
    //         'on'  => esc_html__( 'Enable', 'aiverse' ),
    //         'off' => esc_html__( 'Disable', 'aiverse' ),
    //     ],
    // ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'aiverse_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'aiverse' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'aiverse' ),
            'off' => esc_html__( 'Disable', 'aiverse' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'aiverse_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'aiverse' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'aiverse' ),
            'off' => esc_html__( 'Disable', 'aiverse' ),
        ],
    ];

    // $fields[] = [
    //     'type'     => 'switch',
    //     'settings' => 'aiverse_cursor',
    //     'label'    => esc_html__( 'Cursor On/Off', 'aiverse' ),
    //     'section'  => 'header_top_setting',
    //     'default'  => '0',
    //     'priority' => 10,
    //     'choices'  => [
    //         'on'  => esc_html__( 'Enable', 'aiverse' ),
    //         'off' => esc_html__( 'Disable', 'aiverse' ),
    //     ],
    // ];

    // Button Text
    $fields[] = [
        'type'     => 'text',
        'settings' => 'aiverse_btnone_text',
        'label'    => esc_html__( 'Button One Text', 'aiverse' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Get Started', 'aiverse' ),
        'priority' => 10,
    ];    

    // Button Link
    $fields[] = [
        'type'     => 'link',
        'settings' => 'aiverse_btnone_link',
        'label'    => esc_html__( 'Button One Link', 'aiverse' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '', 'aiverse' ),
        'priority' => 10,
    ];

    // $fields[] = [
    //     'type'     => 'text',
    //     'settings' => 'aiverse_btntwo_text',
    //     'label'    => esc_html__( 'Button Two Text', 'aiverse' ),
    //     'section'  => 'header_top_setting',
    //     'default'  => esc_html__( 'Sign Up', 'aiverse' ),
    //     'priority' => 10,
    // ];    

    // // email
    // $fields[] = [
    //     'type'     => 'link',
    //     'settings' => 'aiverse_btntwo_link',
    //     'label'    => esc_html__( 'Button Two Link', 'aiverse' ),
    //     'section'  => 'header_top_setting',
    //     'default'  => esc_html__( '', 'aiverse' ),
    //     'priority' => 10,
    // ]; 

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );



/*
Header color Setting
 */
function _header_top_fields_color( $fields ) {
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'aiverse_menu_color',
        'label'       => __( 'Menu Color', 'aiverse' ),
        'section'     => 'header_top_setting_color',
        'default'     => '',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'aiverse_menu_active_color',
        'label'       => __( 'Menu Active Color', 'aiverse' ),
        'section'     => 'header_top_setting_color',
        'default'     => '',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'aiverse_menu_hover_color',
        'label'       => __( 'Hover Menu Color', 'aiverse' ),
        'section'     => 'header_top_setting_color',
        'default'     => '',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'aiverse_button_one_color',
        'label'       => __( 'Button One Color', 'aiverse' ),
        'section'     => 'header_top_setting_color',
        'default'     => '',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'aiverse_button_one_hover_color',
        'label'       => __('Button One Hover Color', 'aiverse' ),
        'section'     => 'header_top_setting_color',
        'default'     => '',
        'priority'    => 10,
    ];

    // $fields[] = [
    //     'type'        => 'color',
    //     'settings'    => 'aiverse_button_two_color',
    //     'label'       => __( 'Button Two Background', 'aiverse' ),
    //     'section'     => 'header_top_setting_color',
    //     'default'     => '',
    //     'priority'    => 10,
    // ];

    // $fields[] = [
    //     'type'        => 'color',
    //     'settings'    => 'aiverse_button_two_hover_color',
    //     'label'       => __('Button Two Hover Background', 'aiverse' ),
    //     'section'     => 'header_top_setting_color',
    //     'default'     => '',
    //     'priority'    => 10,
    // ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_top_fields_color' );


/*
Header style Settings
 */
function _header_style_fields( $fields ) {
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'aiverse' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'aiverse' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'aiverse' ),
        'description' => esc_html__( 'Upload Your Logo.', 'aiverse' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/images/logo/logo.png',
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_style_fields' );




/*
 page title / breadcrumb Settings
 */
function _header_page_title_fields( $fields ) {
    // Breadcrumb Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_switch',
        'label'    => esc_html__( 'Breadcrumb Hide', 'aiverse' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'aiverse' ),
            'off' => esc_html__( 'Disable', 'aiverse' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'aiverse' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'aiverse' ),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/page-title/page-title.jpg',
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
 Blog Page Setting
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'aiverse_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'aiverse' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'aiverse' ),
            'off' => esc_html__( 'Disable', 'aiverse' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'aiverse_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'aiverse' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'aiverse' ),
            'off' => esc_html__( 'Disable', 'aiverse' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'aiverse_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'aiverse' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'aiverse' ),
            'off' => esc_html__( 'Disable', 'aiverse' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'aiverse_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'aiverse' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'aiverse' ),
            'off' => esc_html__( 'Disable', 'aiverse' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'aiverse_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'aiverse' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'aiverse' ),
            'off' => esc_html__( 'Disable', 'aiverse' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'aiverse_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'aiverse' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'aiverse' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'aiverse' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'aiverse' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'aiverse' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'aiverse' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer style
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'aiverse' ),
        'section'     => 'footer_setting',
        // 'default'     => '5',
        'placeholder' => esc_html__( 'Select a Footer Style', 'aiverse' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
        ],
        'default'     => 'footer-style-1',
    ];

    // $fields[] = [
    //     'type'     => 'switch',
    //     'settings' => 'footer_shape_image',
    //     'label'    => esc_html__( 'Shape Image On/Off', 'aiverse' ),
    //     'section'  => 'footer_setting',
    //     'default'  => '0',
    //     'priority' => 10,
    //     'choices'  => [
    //         'on'  => esc_html__( 'Enable', 'aiverse' ),
    //         'off' => esc_html__( 'Disable', 'aiverse' ),
    //     ],
    // ];

    // copy right
    $fields[] = [
        'type'     => 'text',
        'settings' => 'aiverse_copyright',
        'label'    => esc_html__( 'Copy Right', 'aiverse' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2024 aiverse. All Rights Reserved', 'aiverse' ),
        'priority' => 10,
    ];

    // // footer social
    // $fields[] = [
    //     'type'     => 'switch',
    //     'settings' => 'footer_social',
    //     'label'    => esc_html__( 'Footer Social On/Off', 'aiverse' ),
    //     'section'  => 'footer_setting',
    //     'default'  => '0',
    //     'priority' => 10,
    //     'choices'  => [
    //         'on'  => esc_html__( 'Enable', 'aiverse' ),
    //         'off' => esc_html__( 'Disable', 'aiverse' ),
    //     ],
    // ];

    // $fields[] = [
    //     'type'     => 'link',
    //     'settings' => 'facebook_link',
    //     'label'    => esc_html__( 'Facebook Link', 'aiverse' ),
    //     'section'  => 'footer_setting',
    //     'default'  => esc_html__( '', 'aiverse' ),
    //     'priority' => 10,
    // ]; 
    // $fields[] = [
    //     'type'     => 'link',
    //     'settings' => 'twitter_link',
    //     'label'    => esc_html__( 'Twitter Link', 'aiverse' ),
    //     'section'  => 'footer_setting',
    //     'default'  => esc_html__( '', 'aiverse' ),
    //     'priority' => 10,
    // ]; 
    // $fields[] = [
    //     'type'     => 'link',
    //     'settings' => 'instagram_link',
    //     'label'    => esc_html__( 'Instagram Link', 'aiverse' ),
    //     'section'  => 'footer_setting',
    //     'default'  => esc_html__( '', 'aiverse' ),
    //     'priority' => 10,
    // ]; 
    // $fields[] = [
    //     'type'     => 'link',
    //     'settings' => 'dribble_link',
    //     'label'    => esc_html__( 'Dribble Link', 'aiverse' ),
    //     'section'  => 'footer_setting',
    //     'default'  => esc_html__( '', 'aiverse' ),
    //     'priority' => 10,
    // ]; 

    // $fields[] = [
    //     'type'     => 'link',
    //     'settings' => 'behance_link',
    //     'label'    => esc_html__( 'Behance Link', 'aiverse' ),
    //     'section'  => 'footer_setting',
    //     'default'  => esc_html__( '', 'aiverse' ),
    //     'priority' => 10,
    // ]; 





    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );


// color
function aiverse_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'aiverse_color_option',
        'label'       => __( 'Primary Color', 'aiverse' ),
        'description' => esc_html__( 'This is a Primary color control.', 'aiverse' ),
        'section'     => 'color_setting',
        'default'     => '',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'aiverse_color_option_2',
        'label'       => __( 'Secondary Color', 'aiverse' ),
        'description' => esc_html__( 'This is a Secondary color control.', 'aiverse' ),
        'section'     => 'color_setting',
        'default'     => '',
        'priority'    => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', 'aiverse_color_fields' );



// 404
function aiverse_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'aiverse_404_bg',
        'label'       => esc_html__( '404 Image.', 'aiverse' ),
        'description' => esc_html__( '404 Image.', 'aiverse' ),
        'section'     => '404_page',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'aiverse_error_title',
        'label'    => esc_html__( 'Not Found Title', 'aiverse' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'aiverse' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'aiverse_error_desc',
        'label'    => esc_html__( '404 Description Text', 'aiverse' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'aiverse' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'aiverse_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'aiverse' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'aiverse' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'aiverse_404_fields' );





/**
 * typography fields
 */
function aiverse_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'aiverse' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'p',
            ],
        ],
    ];
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_link_setting',
        'label'       => esc_html__( 'Link', 'aiverse' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'a',
            ],
        ],
    ];
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_span_setting',
        'label'       => esc_html__( 'Span', 'aiverse' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'a',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'aiverse' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'aiverse' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'aiverse' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'aiverse' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'aiverse' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'aiverse' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'aiverse_typo_fields' );






/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function aiverse_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'aiverse' ) ) {
        $value = Kirki::get_option( aiverse_get_theme(), $name );
    }

    return apply_filters( 'aiverse_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function aiverse_get_theme() {
    return 'aiverse';
}