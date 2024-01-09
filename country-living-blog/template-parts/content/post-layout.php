<?php
$post_author_id   = get_post_field( 'post_author', get_queried_object_id() );
$get_post_column_layout = get_theme_mod( 'post_column', 3 );
$post_column_layout = 'col-sm-12 col-md-6 col-lg-4';
if ( $get_post_column_layout == 2 ) {
	$post_column_layout = 'col-lg-6 col-md-12';
} elseif ( $get_post_column_layout == 3 ) {
	$post_column_layout = 'col-sm-12 col-md-6 col-lg-4';
} elseif ( $get_post_column_layout == 4 ) {
	$post_column_layout = 'col-sm-12 col-md-6 col-lg-3';
}else{
	$post_column_layout = 'col-sm-12 grid-layout';
}
$post_classes = 'country-living-blog-standard-post';
if ( ! has_post_thumbnail() ) {
	$post_classes = 'country-living-blog-standard-post no-post-thumbnail ';
}

$post_el_is_on = array(
	'show_post_category' => get_theme_mod('show_post_category', true),
	'show_post_thumbnail' => get_theme_mod('show_post_thumbnail', true),
	'show_post_date' => get_theme_mod('show_post_date', true),
	'show_post_author' => get_theme_mod('show_post_author', true),
	'show_post_title' => get_theme_mod('show_post_title', true),
	'show_post_excerpt' => get_theme_mod('show_post_excerpt', false),
);
?>
<div class="blog-grid-layout">
	<article id="post-<?php the_ID(); ?>" <?php post_class( $post_classes ); ?>>
		<div class="country-living-blog-standard-post__entry-content text-left">
			<?php
				$nothumb = false;
				if ( has_post_thumbnail() ) : 
					$nothumb = true;
				endif;

				if (true == $post_el_is_on['show_post_thumbnail']) :
					?>
					<div class="country-living-blog-standard-post__thumbnail post-header <?php echo ($nothumb) ? "":"no-thumb";?>">
						<?php
							country_living_blog_post_thumbnail();
						?>
					</div>
					<?php
				endif; 
			?>
			<div class="country-living-blog-standard-post__content-wrapper">
				<div class="country-living-blog-standard-post__post-title">
					<div class="post-heading">
						<div class="post__col-contents">
							<?php
							if(true == $post_el_is_on['show_post_title']) :?>
								<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							<?php endif; ?>
							<div class="entry-date published updated">
								<?php echo get_the_date();?>
							</div>
						</div>
					</div>
					<?php
					if(true == $post_el_is_on['show_post_excerpt']) :
						the_excerpt();
					endif;
				?>
				</div>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
