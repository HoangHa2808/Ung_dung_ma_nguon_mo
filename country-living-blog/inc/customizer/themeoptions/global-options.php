<?php
/**
 * Country Living Blog Theme Global Options
 */

Kirki::add_panel( 'country_living_blog_global_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Template options', 'country-living-blog' ),
) );

require get_theme_file_path('inc/customizer/themeoptions/header-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/banner-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/sidebar-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/post-page-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/theme-color-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/blog-post-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/copyright-settings.php');