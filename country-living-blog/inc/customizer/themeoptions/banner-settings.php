<?php

Kirki::add_section( 'banner_section', array(
    'title'          => esc_html__( 'Banner Settings', 'country-living-blog' ),
    'description'    => esc_html__( 'Customize Banner section', 'country-living-blog' ),
    'panel'          => 'country_living_blog_global_panel',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'switch',
    'settings'    => 'banner_section_on_off',
    'label'       => esc_html__( 'Show/Hide Banner Section', 'country-living-blog' ),
    'section'     => 'banner_section',
    'default'     => 0,
    'choices'     => [
        'on'  => esc_html__( 'Show', 'country-living-blog' ),
        'off' => esc_html__( 'Hide', 'country-living-blog' ),
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'     => 'textarea',
    'settings' => 'banner_title',
    'label'    => esc_html__( 'Banner Title', 'country-living-blog' ),
    'section'  => 'banner_section',
    'default'  => esc_html__( 'Summer sale !', 'country-living-blog' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.hero-content .banner-title',
            'function' => 'html',
        ]
    ],

] );

Kirki::add_field( 'country_living_blog_config', [
    'type'     => 'text',
    'settings' => 'banner_button_text',
    'label'    => esc_html__( 'Button Text', 'country-living-blog' ),
    'section'  => 'banner_section',
    'default'  => esc_html__( 'Shop Now', 'country-living-blog' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.shop-now-button a',
            'function' => 'html',
        ]
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'     => 'link',
    'settings' => 'banner_button_link',
    'label'    => esc_html__( 'Button Link', 'country-living-blog' ),
    'section'  => 'banner_section',
    'default'  => '#',
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'     => 'textarea',
    'settings' => 'banner_title2',
    'label'    => esc_html__( 'Banner Title 2', 'country-living-blog' ),
    'section'  => 'banner_section',
    'default'  => esc_html__( 'Up to 70% !', 'country-living-blog' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.hero-content .banner-title',
            'function' => 'html',
        ]
    ],

] );

Kirki::add_field( 'country_living_blog_config', [
    'type'     => 'text',
    'settings' => 'banner_button_text2',
    'label'    => esc_html__( 'Button Text 2', 'country-living-blog' ),
    'section'  => 'banner_section',
    'default'  => esc_html__( 'Shop Now', 'country-living-blog' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.shop-now-button a',
            'function' => 'html',
        ]
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'     => 'link',
    'settings' => 'banner_button_link2',
    'label'    => esc_html__( 'Button Link 2', 'country-living-blog' ),
    'section'  => 'banner_section',
    'default'  => '#',
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'multicolor',
    'settings'    => 'banner_bg_overlay_settings',
    'label'       => esc_html__( 'Banner Background Overlay', 'country-living-blog' ),
    'section'     => 'banner_section',
    'choices'     => [
        'background-color'    => esc_html__( 'Background Color', 'country-living-blog' ),
    ],
    'transport' => 'postMessage',
    'default'     => [
        'background-color'    => '#000000',
    ],
    'output'      => [
        [
            'element' => 'section.banner-section:before',
        ],
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'background',
    'settings'    => 'banner_bg_settings',
    'label'       => esc_html__( 'Banner Background', 'country-living-blog' ),
    'description' => esc_html__( 'Define The Background Of Banner Section', 'country-living-blog' ),
    'section'     => 'banner_section',
    'default'     => [
        'background-color'      => '#b1c0c8',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'section.banner-section',
        ],
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'typography',
    'settings'    => 'banner_title_typography',
    'label'       => esc_html__( 'Banner Title Typography', 'country-living-blog' ),
    'section'     => 'banner_section',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'bold',
        'font-size'      => '3.375rem',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#ffffff',
        'text-transform' => 'none',
        'text-align'     => 'center',
    ],

    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.banner-title',
        ],
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'typography',
    'settings'    => 'banner_paragraph_typography',
    'label'       => esc_html__( 'Banner Paragraph Typography', 'country-living-blog' ),
    'section'     => 'banner_section',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '1rem',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#ffffff',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.banner-descriptions',
        ],
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'multicolor',
    'settings'    => 'banner_button_colors',
    'label'       => esc_html__( 'Button Color', 'country-living-blog' ),
    'section'     => 'banner_section',
    'choices'     => [
        'btn_bg'    => esc_html__( 'Background Color', 'country-living-blog' ),
        'btn_text'   => esc_html__( 'Text Color', 'country-living-blog' ),
        'btn_hover_bg'   => esc_html__( 'Background Hover Color', 'country-living-blog' ),
        'btn_hover_text'   => esc_html__( 'Text Hover Color', 'country-living-blog' ),
    ],
    'transport' => 'auto',
    'default'     => [
        'btn_bg'    => '#FFFFFF',
        'btn_text'   => '#555555',
        'btn_hover_bg'   => '#555555',
        'btn_hover_text'   => '#ffffff',
    ],
] );

