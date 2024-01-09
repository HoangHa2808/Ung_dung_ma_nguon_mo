<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Country Living Blog
 */
get_header();
$show_hide_banner_section = get_theme_mod('banner_section_on_off', false);
$heading_text = get_theme_mod('heading_text', __( 'Latest from', 'country-living-blog' ));
$sub_heading_text = get_theme_mod('sub_heading_text', __( 'THE BLOG', 'country-living-blog' ));

if (true === $show_hide_banner_section) {
	get_template_part( 'template-parts/banner/banner', 'section');
}
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="main-heading">
			<h1><?php echo $heading_text; ?></h1>
			<h2><?php echo $sub_heading_text; ?></h2>
		</div>
	<?php
	do_action( 'country_living_blog_before_default_page' );
	if ( have_posts() ) :
		echo '<div class="row">';
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content/content', get_post_type() );
			endwhile;
		echo '</div>';
			country_living_blog_navigation();
		else :
			get_template_part( 'template-parts/content/content', 'none' );
		endif;
		do_action( 'country_living_blog_after_default_page' );
		?>
	</main><!-- #main -->
</div>
<?php
get_footer();
