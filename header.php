<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tajam-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e('Skip to content', 'tajam-theme'); ?>
    </a>

    <header id="home" class="site-header"
            style="background-image: linear-gradient(to right, rgba(9, 5, 47, .85) 0%, rgba(49, 29, 94, .85) 100%),
                    url('<?php echo CFS()->get('background_image_banner'); ?>')">

        <nav id="site-navigation" class="site-navigation">
            <div class="container">
                <div class="main-nav">
                    <div class="site-branding">
                        <?php the_custom_logo(); ?>
                    </div><!-- .site-branding -->

                    <div class="main-menu">
                        <button class="toggle-menu" aria-controls="primary-menu" aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </nav><!-- #site-navigation -->

        <section class="main-banner container">

            <h1 class="main-title"><?php echo CFS()->get('main_headline'); ?></h1>

            <ul class="main-banner__descriptions-list bannar-slider">

                <?php
                $fields = CFS()->get('list_of_descriptions_main_banner');
                foreach ($fields as $field) { ?>

                    <li class="main-banner__description-item">
                        <div class="main-banner__description-item-text">
                            <?php echo $field['description_main_banner']; ?>
                        </div>
                        <a href="<?php echo $field['button_link_main_banner']; ?>"
                           class="main-banner__description-item-button btn">
                            <?php echo $field['button_title_main_banner']; ?>
                        </a>
                    </li>

                <?php }; ?>
            </ul>

        </section>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
