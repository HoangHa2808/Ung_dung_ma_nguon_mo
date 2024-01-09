<?php
/**
 * Country Living Blog Hero Home two
 */

 $banner_title = get_theme_mod('banner_title', __('Summer Sale ! ', 'country-living-blog'));
 $button_text = get_theme_mod('banner_button_text', __( 'Shop Now', 'country-living-blog' ));
 $button_link = get_theme_mod('banner_button_link', '#');

 $banner_title2 = get_theme_mod('banner_title2', __('Up to 70% ! ', 'country-living-blog'));
 $button_text2 = get_theme_mod('banner_button_text2', __( 'Shop Now', 'country-living-blog' ));
 $button_link2 = get_theme_mod('banner_button_link2', '#');

 $banners = array(
    [
        'title' => $banner_title,
        'btn-link' => $button_link,
        'btn-text' => $button_text
    ],
    [
        'title' => $banner_title2,
        'btn-link' => $button_link2,
        'btn-text' => $button_text2
    ]
 );
 ?>
 <section id="hero-section" class="banner-section">
     <div class="container">
         <div class="row banner-row-slider">
            <?php 
            $col_class = 'col-md-6 ';
            foreach($banners as $banner){
            ?>
                <div class="<?php echo $col_class; ?>align-self-center banner__col">
                    <div class="hero-content mb-4 mb-md-0">
                        <?php
                        if(!empty($banner["title"])) :
                        ?>
                        <h2 class="banner-title mt-0"><?php echo wp_kses_post($banner["title"]); ?></h2>
                    <?php endif;
                    if (!empty($banner["btn-text"])):
                    ?>
                        <div class="shop-now-button">
                            <a class="btn-slice" href="<?php echo esc_url($banner["btn-link"]);?>">
                                <div class="top"><span><?php echo esc_html( $banner["btn-text"] );?></span></div>
                                <div class="bottom"><span><?php echo esc_html( $banner["btn-text"] );?></span></div>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
            }
            ?>
         </div>
     </div>
 </section>
