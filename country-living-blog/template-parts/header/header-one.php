<?php
/**
* Template Name: Header Two
*
*/
?>
<section class="header-banner"></section>
<header id="masthead" class="site-header header-one" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>);">
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-md-2 m-auto">
					<div class="header-menu-wrapper">
						<div class="site-branding header-logo">
							<?php
							if ( has_custom_logo() ) :
								the_custom_logo();
							endif;
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
								$country_living_blog_description = get_bloginfo( 'description', 'display' );
								if ( $country_living_blog_description || is_customize_preview() ) :
								?>
									<p class="site-description"><?php echo esc_html( $country_living_blog_description ); /* WPCS: xss ok. */ ?></p>
								<?php
							endif;
							?>
						</div><!-- .site-branding -->
					</div>
				</div>
				<div class="col-md-10 search-col">
					<div class="cssmenu-center" id="cssmenu">
						<?php
						wp_nav_menu(
							array(
								'theme_location'    => 'main-menu',
								'container'         => 'ul',
							)
						);
						?>
					</div>
					<div class="search-menu__wrapper">
						<form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<div class="input-search-wrapper">
								<input type="text" class="form-control" id="search" placeholder="<?php esc_attr_e( 'Search', 'country-living-blog' ); ?>" value="<?php echo esc_attr( the_search_query() ); ?>" name="s">
							</div>
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->
