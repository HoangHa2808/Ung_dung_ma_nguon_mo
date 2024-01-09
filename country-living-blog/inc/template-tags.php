<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Country Living Blog
 */
if ( ! function_exists( 'country_living_blog_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function country_living_blog_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}
		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);
		$timeIcon = '%1$s';
		$posted_on = sprintf(
			$timeIcon,
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$line = '<i class="line"></i>&nbsp;';

		echo '<span class="posted-on">'.$line.'' . $posted_on . '</span>'; // WPCS: XSS OK.
	}
endif;
if ( ! function_exists( 'country_living_blog_time' ) ) {
	function country_living_blog_time() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}
		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);
		echo '<i class="blog-time">' . wp_kses_post( $time_string ) . '</i>';
	}
}
if ( ! function_exists( 'country_living_blog_posted_by' ) ) :
	function country_living_blog_posted_by( $author_image = true ) {
		$posted_by_format = '<a href="%1$s">%2$s %3$s</a>';
		$post_author_id   = get_post_field( 'post_author', get_queried_object_id() );
		$get_author_image = '<span class="post-author-image"> ' . get_avatar( get_the_author_meta( 'ID' ), 30 ) . '</span> ';
		if ( false === $author_image ) {
			$get_author_image = __( 'Posted by', 'country-living-blog' );
		}
		$postedBy = sprintf(
			$posted_by_format,
			esc_url( get_author_posts_url( get_the_author_meta( $post_author_id ), get_the_author_meta( 'user_nicename' ) ) ),
			$get_author_image,
			'<i>' . esc_html( get_the_author_meta( 'display_name', $post_author_id ) ) . '</i>'
		);
		echo '<span class="posted_by">' . wp_kses_post( $postedBy ) . '</span>';
	}
endif;
if ( ! function_exists( 'country_living_blog_comment_popuplink' ) ) {
	function country_living_blog_comment_popuplink() {
		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			// $commentIcon = ;
			echo '<span class="comments-link"><i class="fa fa-comments-o" aria-hidden="true"></i>';
			$css_class = 'zero-comments';
			$number    = (int) get_comments_number( get_the_ID() );
			if ( 1 === $number ) {
				$css_class = 'one-comment';
			} elseif ( 1 < $number ) {
				$css_class = 'multiple-comments';
			}
			comments_popup_link(
				__( 'Post a Comment', 'country-living-blog' ),
				__( '1 Comment', 'country-living-blog' ),
				__( '% Comments', 'country-living-blog' ),
				$css_class,
				__( 'Comments are Closed', 'country-living-blog' )
			);
			echo '</span>';
		}
	}
}
function country_living_blog_categories() {
		$categories_list = get_the_category_list( ' ' );
	if ( 'post' === get_post_type() && !is_single()) {
		/* translators: used between list items, there is a space after the comma */
		if ( $categories_list ) {
			printf( '<i class="fa fa-folder-open-o"></i><span class="categories">' . '%1$s' . '</span>', $categories_list ); // WPCS: XSS OK.
		}
	}else {
		if ( $categories_list ) {
			printf( '<span class="cat-links">' . '%1$s' . '</span>', $categories_list ); // WPCS: XSS OK.
		}
	}
	return;
}
if ( ! function_exists( 'country_living_blog_post_tag' ) ) {
	function country_living_blog_post_tag() {
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', '' );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . wp_kses_post($tags_list) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
		return;
	}
}
if ( ! function_exists( 'country_living_blog_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function country_living_blog_post_thumbnail() {
		$get_blog_layout = get_theme_mod( 'blog_layout', 'grid' );
		$thumbnail_size  = 'country-living-blog-grid-thumbnail';
		if ( is_single() || is_page() ) {
			$thumbnail_size = 'country-living-blog-thumbnail-large';
		} else {
			if ( 'list' === $get_blog_layout ) {
				$thumbnail_size = 'country-living-blog-thumbnail-large';
			} elseif ( 'grid' === $get_blog_layout ) {
				$thumbnail_size = 'country-living-blog-grid-thumbnail';
			}
		}
		$post_thumnail = wp_get_attachment_image_url( get_post_thumbnail_id( get_the_ID() ), 'full' );
		if ( is_single() || is_page() ) {
			 the_post_thumbnail( 'full' );
		} else {
			if ( has_post_thumbnail() ) :
				?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'full' ); ?>
				</a>
				<?php
			elseif ( $post_thumnail ) :
				echo '<a href="' . esc_url( get_the_permalink() ) . '"><img src="' . esc_url( $post_thumnail ) . '" alt=""></a>';
			endif;
		}
	}
endif;

function country_living_blog_navigation() {
	echo '<div class="pagination_link">';
		?>
			<div class="alignleft"><?php previous_posts_link( '&laquo; previous page' ); ?></div>
			<div class="alignright"><?php next_posts_link( 'next page &raquo;', '' ); ?></div>
		<?php
	echo '</div>';
}
