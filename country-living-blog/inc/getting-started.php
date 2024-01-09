<?php
/**
 * Getting Started Help Notic
 **/
function country_living_blog_general_admin_notice(){
       global $pagenow;
       $theme_args      = wp_get_theme();
       $meta            = get_option( 'author_blog_admin_notice' );
       $name            = $theme_args->__get( 'Name' );
       $current_screen  = get_current_screen();
       if( 'themes.php' == $pagenow && !$meta ){
           if( $current_screen->id !== 'dashboard' && $current_screen->id !== 'themes' ){
               return;
           }
           if( is_network_admin() ){
               return;
           }
           if( ! current_user_can( 'manage_options' ) ){
               return;
           } ?>
            <div class="smarterthemes welcome-message notice notice-info">
               <div class="notice-wrapper">
                   <div class="notice-text">
                       <h3><?php printf( __( 'Thank you for installing %1$s Theme.', 'country-living-blog' ), esc_html( $name ) ); ?></h3>
                       <p><?php esc_html_e( 'Use the button below to customize your website or go to Appearance -> Customize.', 'country-living-blog'  ) ; ?></p>
                       <p>
                       <a href="<?php echo admin_url( '/customize.php' );?>" class="button button-primary" style="text-decoration: none;">
                            <?php esc_html_e( 'Go to customize your theme', 'country-living-blog' ); ?>
                        </a>
                       </p>
                       <p class="dismiss-link"><strong><a href="?country_living_blog_notice_dismissed=1"><?php esc_html_e( 'Dismiss','country-living-blog' ); ?></a></strong></p>
                   </div>
               </div>
           </div>
       <?php }
}

if ( isset( $_GET['country_living_blog_notice_dismissed'] ) ){
    //set notice value false
    update_option('country_living_blog_help_notice', 'notice_country_living_blog_dismissed');
}

$country_living_blog_help_notice = get_option('country_living_blog_help_notice', '');

if (($country_living_blog_help_notice != 'notice_country_living_blog_dismissed' || $country_living_blog_help_notice === '') ){
    add_action('admin_notices', 'country_living_blog_general_admin_notice');
}