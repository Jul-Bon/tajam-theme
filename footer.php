<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tajam-theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="footer section-padding" style="background-image:
        linear-gradient(to right, rgba(9, 5, 47, .85) 0%, rgba(49, 29, 94, .85) 100%),
        url('<?php echo get_theme_mod('footer-bg'); ?>')">
    <div class="site-info container">
        <div class="footer__top-part">

            <div class="footer__logo-part">
                <img class="footer-logo" src="<?php echo get_theme_mod('img-logo'); ?>" alt="tajam">
                <p class="footer_description"><?php echo get_theme_mod('footer_description'); ?></p>
            </div>

            <div class="footer__contacts">
                <h2 class="footer__section-title"><?php echo get_theme_mod('contact-title'); ?></h2>

                <p class="footer__address"><?php echo get_theme_mod('address'); ?></p>
                <a class="footer__phone" href="tell:<?php echo get_theme_mod('phone_number'); ?>">
                    <?php echo get_theme_mod('phone_number'); ?>
                </a>
            </div>

            <div class="footer__stay-in-touch-block">
                <h2 class="footer__section-title"><?php echo get_theme_mod('touch-title'); ?></h2>

                <div class="subscribe-form">
                    <?php echo do_shortcode('[contact-form-7 id="126" title="Subscribe form"]'); ?>
                </div>

                <ul class="social-networks">
                    <?php if (get_theme_mod('facebook_social') != ''): ?>
                        <li class="social-networks__item">
                            <a class="social-networks__item-link" href="<?php echo get_theme_mod('facebook_social'); ?>"
                               target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('twitter_social') != ''): ?>
                        <li class="social-networks__item">
                            <a class="social-networks__item-link" href="<?php echo get_theme_mod('twitter_social'); ?>"
                               target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('dribbble_social') != ''): ?>
                        <li class="social-networks__item">
                            <a class="social-networks__item-link" href="<?php echo get_theme_mod('dribbble_social'); ?>"
                               target="_blank">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('instagram_social') != ''): ?>
                        <li class="social-networks__item">
                            <a class="social-networks__item-link"
                               href="<?php echo get_theme_mod('instagram_social'); ?>" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('google_plus_social') != ''): ?>
                        <li class="social-networks__item">
                            <a class="social-networks__item-link"
                               href="<?php echo get_theme_mod('google_plus_social'); ?>" target="_blank">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('youtube_social') != ''): ?>
                        <li class="social-networks__item">
                            <a class="social-networks__item-link" href="<?php echo get_theme_mod('youtube_social'); ?>"
                               target="_blank">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <div class="footer__bottom-part">
            <div class="footer-menu">
                <?php wp_nav_menu('menu=Footer Menu'); ?>
            </div>
            <span class="copy_text"><?php echo get_theme_mod('footer_copy'); ?></span>
        </div>

    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
