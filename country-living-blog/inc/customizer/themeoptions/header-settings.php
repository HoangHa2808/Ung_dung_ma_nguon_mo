<?php
Kirki::add_section( 'country_living_blog_theme_header_settings', array(
    'title'          => esc_html__( 'Header Settings', 'country-living-blog' ),
    'panel'          => 'country_living_blog_global_panel',
) );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'background',
    'settings'    => 'header_bg_settings',
    'label'       => esc_html__( 'Header Background', 'country-living-blog' ),
    'description' => esc_html__( 'Define The Background Of Header Section', 'country-living-blog' ),
    'section'     => 'country_living_blog_theme_header_settings',
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
            'element' => 'section.header-banner',
        ],
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'color',
    'settings'    => 'header_bgc_color',
    'label'       => __( 'Header Menu Background Color', 'country-living-blog' ),
    'section'     => 'country_living_blog_theme_header_settings',
    'default'     => '#ffffff',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => 'header#masthead',
            'property' => 'background',
        ),
    ),
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'typography',
    'settings'    => 'header_title_typography',
    'label'       => esc_html__( 'Site Title Typography', 'country-living-blog' ),
    'section'     => 'country_living_blog_theme_header_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => '700',
        'font-size'      => '20px',
        'line-height'    => '1.6',
        'letter-spacing' => '2px',
        'color'          => '#1b1b1b',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-branding .site-title a',
        ],
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'typography',
    'settings'    => 'header_desc_typography',
    'label'       => esc_html__( 'Site Description Typography', 'country-living-blog' ),
    'section'     => 'country_living_blog_theme_header_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '.6rem',
        'line-height'    => '1.4',
        'letter-spacing' => '0px',
        'color'          => '#545454',
        'text-transform' => 'uppercase',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-branding p.site-description',
        ],
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'typography',
    'settings'    => 'header_menu_typography',
    'label'       => esc_html__( 'Menu Typography', 'country-living-blog' ),
    'section'     => 'country_living_blog_theme_header_settings',
    'default'     => [
        'font-family'    => 'Montserrat',
        'variant'        => '500',
        'font-size'      => '11px',
        'line-height'    => '1.81em',
        'letter-spacing' => '.2em',
        'color'          => '#555555',
        'text-transform' => 'uppercase',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#cssmenu>ul>li>a, #cssmenu ul ul li a',
        ],
    ],
] );
