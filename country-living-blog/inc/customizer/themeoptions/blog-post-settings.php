<?php
/*Blog Page Settings*/

Kirki::add_section( 'post_loop_settings_section', array(
    'title'          => esc_html__( 'Post Loop Settings', 'country-living-blog' ),
    'panel'          => 'country_living_blog_global_panel',
) );

Kirki::add_field( 'country_living_blog_config', [
	'type'        => 'select',
	'settings'    => 'post_column',
	'label'       => esc_html__( 'Post Column', 'country-living-blog' ),
	'section'     => 'post_loop_settings_section',
	'default'    => '3',
	'priority'    => 10,
	'choices' => [
			'4' => __( '4 Colmun', 'country-living-blog' ),
			'3' => __( '3 Column', 'country-living-blog' ),
			'2' => __( '2 Column', 'country-living-blog' ),
			'1' => __( 'Grid', 'country-living-blog' ),
		],
] );

Kirki::add_field( 'rs_personal_blog_config', array(
    'type'        => 'custom',
    'settings'    => 'sep_after_post_column',
    'label'       => '',
    'section'     => 'post_loop_settings_section',
    'default'     => '<hr>',
) );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_category',
    'label'       => esc_html__( 'Show Post Category', 'country-living-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_title',
    'label'       => esc_html__( 'Show Post Title', 'country-living-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_author',
    'label'       => esc_html__( 'Show Post Author', 'country-living-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_thumbnail',
    'label'       => esc_html__( 'Thumbnail  On//Off', 'country-living-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_excerpt',
    'label'       => esc_html__( 'Show Post Excerpt', 'country-living-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => false,
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'     => 'text',
    'settings' => 'heading_text',
    'label'    => esc_html__( 'Heading Text', 'country-living-blog' ),
    'section'  => 'post_loop_settings_section',
    'default'  => esc_html__( 'Latest from', 'country-living-blog' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.site-main .main-heading h1',
            'function' => 'html',
        ]
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'typography',
    'settings'    => 'heading_style',
    'label'       => esc_html__( 'Heading Style', 'country-living-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => [
        'font-family'    => 'Dancing Script',
        'variant'        => '600',
        'font-size'      => '26px',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#555555',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-main .main-heading h1',
        ],
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'     => 'text',
    'settings' => 'sub_heading_text',
    'label'    => esc_html__( 'Sub Heading Text', 'country-living-blog' ),
    'section'  => 'post_loop_settings_section',
    'default'  => esc_html__( 'THE BLOG', 'country-living-blog' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.site-main .main-heading h2',
            'function' => 'html',
        ]
    ],
] );

Kirki::add_field( 'country_living_blog_config', [
    'type'        => 'typography',
    'settings'    => 'sub_heading_style',
    'label'       => esc_html__( 'Sub Heading Style', 'country-living-blog' ),
    'section'     => 'post_loop_settings_section',
    'default'     => [
        'font-family'    => 'Merriweather',
        'variant'        => '700',
        'font-size'      => '26px',
        'line-height'    => '1.6',
        'letter-spacing' => '3px',
        'color'          => '#555555',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-main .main-heading h2',
        ],
    ],
] );