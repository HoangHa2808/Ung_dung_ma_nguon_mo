<?php
/**
 * Enqueue scripts and styles.
 */
function country_living_blog_scripts() {
	wp_enqueue_style( 'fontawesome', esc_url(get_theme_file_uri('assets/css/fontawesome.css')) );
	wp_enqueue_style( 'slick-theme', esc_url(get_theme_file_uri('assets/slick-1.8.1/slick/slick-theme.css')) );
	wp_enqueue_style( 'slick', esc_url(get_theme_file_uri('assets/slick-1.8.1/slick/slick.css')) );
	wp_enqueue_style( 'country-living-blog-style', get_stylesheet_uri() );
	
	if(get_theme_mod('banner_bg_settings', 'transparent')){
		$banner_overlay_color = array(
			'background-color'    => '#000000',
		);
		$banner_overlay = get_theme_mod('banner_bg_overlay_settings', $banner_overlay_color);
	}

	$inline_style_data = '
	section.banner-section {
		position: relative;
	}';

	wp_add_inline_style('country-living-blog-style', $inline_style_data);
	wp_enqueue_script( 'country-living-blog-slick-js', esc_url( get_template_directory_uri() ) . '/assets/slick-1.8.1/slick/slick.js', array( 'jquery' ), NULL, true );
	wp_enqueue_script( 'imagesloaded.pkgd', esc_url( get_template_directory_uri() ) . '/assets/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'masonry' );
	wp_enqueue_script( 'country-living-blog-menu', esc_url( get_template_directory_uri() ) . '/assets/js/menu.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'country-living-blog-active', esc_url( get_template_directory_uri() ) . '/assets/js/active.js', array( 'jquery' ), '1.0', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'country_living_blog_scripts' );

add_action('customize_controls_enqueue_scripts', 'country_living_blog_customizer_scripts');
function country_living_blog_customizer_scripts(){
	wp_enqueue_style('customizer-style', esc_url(get_theme_file_uri('inc/customizer/customizer-style.css')), array(), '49879', 'all');
}
