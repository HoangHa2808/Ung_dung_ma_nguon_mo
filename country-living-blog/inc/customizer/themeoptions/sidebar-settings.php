<?php
/*Blog Page Settings*/

Kirki::add_section( 'sidebar_settings_section', array(
    'title'          => esc_html__( 'Sidebar Settings', 'country-living-blog' ),
    'description'          => esc_html__( 'Control Sidebar Of Your Website', 'country-living-blog' ),
    'panel'          => 'country_living_blog_global_panel',
) );

Kirki::add_field( 'country_living_blog_config', [
	'type'        => 'select',
	'settings'    => 'blog_page_sidebar',
	'label'       => esc_html__( 'Blog Page Sidebar', 'country-living-blog' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'country-living-blog' ),
		'right' => esc_html__( 'Right Sidebar', 'country-living-blog' ),
		'no' => esc_html__( 'No Sidebar', 'country-living-blog' ),
	],
] );

Kirki::add_field( 'country_living_blog_config', [
	'type'        => 'select',
	'settings'    => 'archive_page_sidebar',
	'label'       => esc_html__( 'Archive Page Sidebar', 'country-living-blog' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'country-living-blog' ),
		'right' => esc_html__( 'Right Sidebar', 'country-living-blog' ),
		'no' => esc_html__( 'No Sidebar', 'country-living-blog' ),
	],
] );

Kirki::add_field( 'country_living_blog_config', [
	'type'        => 'select',
	'settings'    => 'page_sidebar',
	'label'       => esc_html__( 'Page Sidebar', 'country-living-blog' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'country-living-blog' ),
		'right' => esc_html__( 'Right Sidebar', 'country-living-blog' ),
		'no' => esc_html__( 'No Sidebar', 'country-living-blog' ),
	],
] );

Kirki::add_field( 'country_living_blog_config', [
	'type'        => 'select',
	'settings'    => 'post_sidebar',
	'label'       => esc_html__( 'Post Sidebar', 'country-living-blog' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'country-living-blog' ),
		'right' => esc_html__( 'Right Sidebar', 'country-living-blog' ),
		'no' => esc_html__( 'No Sidebar', 'country-living-blog' ),
	],
] );
