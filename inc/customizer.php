<?php
/**
 * tajam-theme Theme Customizer
 *
 * @package tajam-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tajam_theme_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'tajam_theme_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'tajam_theme_customize_partial_blogdescription',
        ));
    }

    //footer settings
    $wp_customize->add_section('footer_setting', array(
        'title' => __('Footer settings', 'tajam'),
        'priority' => 25,
    ));

    // Footer-logo
    $wp_customize->add_setting('img-logo');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'img-logo',
            array(
                'label' => 'Logo',
                'section' => 'footer_setting',
                'settings' => 'img-logo'
            )
        )
    );

    // Footer-logo
    $wp_customize->add_setting('footer-bg');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer-bg',
            array(
                'label' => 'Background for footer',
                'section' => 'footer_setting',
                'settings' => 'footer-bg'
            )
        )
    );

    //Add settings for footer description
    $wp_customize->add_setting('footer_description', array(
        'default' => __('Description for footer', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_description', array(
        'label' => __('Description for Footer part ', 'tajam'),
        'section' => 'footer_setting',
        'settings' => 'footer_description',
        'type' => 'textarea',
    ));


    //Contact title
    $wp_customize->add_setting('contact-title', array(
        'default' => __('Title for contacts', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact-title', array(
        'label' => __('Title for contacts ', 'tajam'),
        'section' => 'footer_setting',
        'settings' => 'contact-title',
        'type' => 'text',
    ));

    //Address
    $wp_customize->add_setting('address', array(
        'default' => __('Address', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('address', array(
        'label' => __('Address ', 'tajam'),
        'section' => 'footer_setting',
        'settings' => 'address',
        'type' => 'textarea',
    ));

    //Phone number
    $wp_customize->add_setting('phone_number', array(
        'default' => __('Phone numbers', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('phone_number', array(
        'label' => __('Phone numbers ', 'tajam'),
        'section' => 'footer_setting',
        'settings' => 'phone_number',
        'type' => 'textarea',
    ));

    //Get in touch title
    $wp_customize->add_setting('touch-title', array(
        'default' => __('Title for get in touch block', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('touch-title', array(
        'label' => __('Title for get in touch block ', 'tajam'),
        'section' => 'footer_setting',
        'settings' => 'touch-title',
        'type' => 'text',
    ));

    //Add the settings of social networking icons
    $wp_customize->add_section('social_section', array(
        'title' => __('Social settings', 'tajam'),
        'priority' => 26,
    ));
    $wp_customize->add_control('social_menu', array(
        'label' => __('Social menu in footer', 'tajam'),
        'section' => 'social_section',
        'settings' => 'social_menu',
        'type' => 'text',
    ));
    $wp_customize->add_setting('facebook_social', array(
        'default' => __('Url facebook', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('facebook_social', array(
        'label' => __('Facebook profile url', 'tajam'),
        'section' => 'social_section',
        'settings' => 'facebook_social',
        'type' => 'text',
    ));
    $wp_customize->add_setting('twitter_social', array(
        'default' => __('Url twitter', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('twitter_social', array(
        'label' => __('Twitter profile url', 'tajam'),
        'section' => 'social_section',
        'settings' => 'twitter_social',
        'type' => 'text',
    ));

    $wp_customize->add_setting('dribbble_social', array(
        'default' => __('Url for dribbble', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('dribbblesocial', array(
        'label' => __('Dribbble profile url', 'tajam'),
        'section' => 'social_section',
        'settings' => 'dribbble_social',
        'type' => 'text',
    ));

    $wp_customize->add_setting('instagram_social', array(
        'default' => __('Url instagram', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('instagram_social', array(
        'label' => __('Instagram profile url', 'tajam'),
        'section' => 'social_section',
        'settings' => 'instagram_social',
        'type' => 'text',
    ));

    $wp_customize->add_setting('google_plus_social', array(
        'default' => __('Url google_plus', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('google_plus_social', array(
        'label' => __('Google Plus profile url', 'tajam'),
        'section' => 'social_section',
        'settings' => 'google_plus_social',
        'type' => 'text',
    ));

    $wp_customize->add_setting('youtube_social', array(
        'default' => __('Url for YouTube', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('youtube_social', array(
        'label' => __('YouTube profile url', 'tajam'),
        'section' => 'social_section',
        'settings' => 'youtube_social',
        'type' => 'text',
    ));


    //copyright
    $wp_customize->add_setting('footer_copy', array(
        'default' => __('Copyright text', 'tajam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_copy', array(
        'label' => __('Copyright', 'tajam'),
        'section' => 'footer_setting',
        'settings' => 'footer_copy',
        'type' => 'textarea',
    ));

}

add_action('customize_register', 'tajam_theme_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function tajam_theme_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function tajam_theme_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tajam_theme_customize_preview_js()
{
    wp_enqueue_script('tajam-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'tajam_theme_customize_preview_js');
