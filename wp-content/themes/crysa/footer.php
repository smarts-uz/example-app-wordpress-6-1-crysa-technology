<?php
/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crysa
 */
?>
<!-- Start Footer 
============================================= -->
<footer class="bg-dark text-light">
    <?php if(is_active_sidebar('footer-sidebar1') || is_active_sidebar('footer-sidebar2')|| is_active_sidebar('footer-sidebar3') || is_active_sidebar('footer-sidebar4') ):?>
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <?php if(is_active_sidebar('footer-sidebar1')):?>
                    <div class="col-lg-4 col-md-6 item">
                        <?php dynamic_sidebar('footer-sidebar1')?>
                    </div>
                <?php endif;?>
                <?php if(is_active_sidebar('footer-sidebar2')):?>
                    <div class="col-lg-2 col-md-6 item">
                        <?php dynamic_sidebar('footer-sidebar2')?>
                    </div>
                <?php endif;?>
                <?php if(is_active_sidebar('footer-sidebar3')):?>
                    <div class="col-lg-3 col-md-6 item">
                        <?php dynamic_sidebar('footer-sidebar3')?>
                    </div>
                <?php endif;?>
                <?php if(is_active_sidebar('footer-sidebar4')):?>
                    <div class="col-lg-3 col-md-6 item">
                        <?php dynamic_sidebar('footer-sidebar4')?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php endif;?>
    <?php global $crysa_option; if(is_active_sidebar('footer-sidebar1') || is_active_sidebar('footer-sidebar2')|| is_active_sidebar('footer-sidebar3') || is_active_sidebar('footer-sidebar4') ):?>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
    <?php else:?>
    <div class="footer-bottom before-activate-plugin">
    <?php endif;?>    
        <div class="container">
            <div class="footer-bottom-box">
                <div class="row">
                    <div class="col-lg-6">
                        <?php if(!empty($crysa_option['footer_txt'])):?>
                            <p><?php global $crysa_option; echo html_entity_decode(esc_html($crysa_option['footer_txt'])); ?></p>
                        <?php else:?>
                            <p><?php echo esc_html__("© Copyright 2022. All Rights Reserved by validthemes",'crysa'); ?></p>
                        <?php endif;?> 
                    </div>
                    <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
                        <div class="col-lg-6 text-right">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-menu',
                                    'container'       => 'ul',
                                ) );
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->
<?php wp_footer();?>    
</body>
</html>