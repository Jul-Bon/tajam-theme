<?php
/**
 * Template Name: Home
 *
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="our-story" id="about">

                <div class="our-story__text container section-padding">
                    <img class="our-story__logo" src="<?php echo CFS()->get('section_image_our_story'); ?>" alt="">

                    <div class="our-story__text-part">
                        <h2 class="section-title"><?php echo CFS()->get('section_title_our_story'); ?></h2>
                        <div class="our-story__info">
                            <?php echo CFS()->get('section_text_our_story'); ?>
                        </div>

                        <button class="btn"><?php echo CFS()->get('button_label_our_story'); ?></button>
                    </div>
                </div>

                <div class="our-story__video">
                    <iframe id='video'
                            src="https://player.vimeo.com/video/310197402?title=0&byline=0&portrait=0&controls=0&sidedock=0"
                            width="1600"
                            height="570" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                    </iframe>

                    <div class="our-story__video-overlay"
                         style="background-image: linear-gradient(to right, rgba(9, 5, 47, .85) 0%,
                                 rgba(49, 29, 94, .85) 100%), url('<?php echo CFS()->get('background_image_overlay'); ?>')">
                        <div class="our-story__button-block">
                            <button class="play-button"><img src="<?php echo CFS()->get('button_play_icon'); ?>" alt="">
                            </button>
                            <span class="our-story__video-title">
                                <?php echo CFS()->get('title_for_video_our_story'); ?>
                            </span>
                        </div>
                    </div>
                </div>

            </section>

            <section class="expertise container section-padding" id="expertise">
                <div class="section-headline">
                    <h2 class="section-title"><?php echo CFS()->get('section_title_expertise'); ?></h2>
                    <p class="section-description"><?php echo CFS()->get('section_description_expertise'); ?></p>
                </div>

                <div class="expertise__list-wrap">
                    <ul class="expertise__list">

                        <?php $fields = CFS()->get('expertise_list_home');
                        foreach ($fields as $field) { ?>

                            <li class="expertise__item">
                                <div class="expertise__item-icon">
                                    <img src="<?php echo $field['item_icon_expertise_list']; ?>" alt="Item icon">
                                </div>
                                <h3 class="expertise__item-title"><?php echo $field['item_title_expertise_list']; ?></h3>
                                <p class="expertise__item-description"><?php echo $field['item_text_expertise_list']; ?></p>
                            </li>

                        <?php }; ?>

                    </ul>
                </div>
            </section>

            <section class="our-team" id="teams" style="background-image:
                    linear-gradient(to right, rgba(9, 5, 47, .85) 0%, rgba(49, 29, 94, .85) 100%),
                    url('<?php echo CFS()->get('section_background_home_our_team'); ?>')">

                <div class="container section-padding">
                    <div class="section-headline">
                        <h2 class="section-title"><?php echo CFS()->get('section_title_home_our_team'); ?></h2>
                        <p class="section-description"><?php echo CFS()->get('section_subtitle_home_our_team'); ?></p>
                    </div>

                    <ul class="our-team__list">
                        <?php
                        //The query
                        $args = array(
                            'post_type' => 'our_team',
                            'order' => 'ASC',
                            'posts_per_page' => 4
                        );
                        $members = new WP_Query($args); ?>

                        <?php if ($members->have_posts()): ?>

                            <!-- The loop -->
                            <?php while ($members->have_posts()) : $members->the_post(); ?>
                                <?php get_template_part('template-parts/content-our-team', 'team'); ?>
                            <?php endwhile; ?>
                            <!-- End of the loop -->

                            <?php wp_reset_query(); ?>
                        <?php endif; ?>
                    </ul>

                    <p class="become-team">Become part of our dream team, let’s join us !</p>
                    <button class="btn hiring-button">WE ARE HIRING</button>

                </div>
            </section>

            <section class="our-works section-padding" id="works">
                <div class="our-works__headline container">
                    <h2 class="section-title"><?php echo CFS()->get('section_title_home_our_works'); ?></h2>
                    <a href="<?php echo CFS()->get('url_for_dribbble'); ?>" target="_blank" class="work_link">
                        <?php echo CFS()->get('link_title_for_dribbble'); ?>
                    </a>
                </div>

                <ul class="our-works__list">

                    <?php
                    //The query
                    $args = array(
                        'post_type' => 'our_works',
                        'order' => 'ASC',
                        'posts_per_page' => 12
                    );
                    $works = new WP_Query($args); ?>

                    <?php if ($works->have_posts()): ?>

                        <!-- The loop -->
                        <?php while ($works->have_posts()) : $works->the_post(); ?>
                            <?php get_template_part('template-parts/content-our-works', 'works'); ?>
                        <?php endwhile; ?>
                        <!-- End of the loop -->

                        <?php wp_reset_query(); ?>
                    <?php endif; ?>

                </ul>

            </section>

            <section class="testimonials section-padding" id="people-say" style="background-image:
                    linear-gradient(to right, rgba(9, 5, 47, .85) 0%, rgba(49, 29, 94, .85) 100%),
                    url('<?php echo CFS()->get('background_image_home_people_say'); ?>')">
                <div class="container">
                    <ul class="testimonials__list">
                        <?php get_template_part('template-parts/content-testimonials', 'testimonials'); ?>
                    </ul>
                </div>
            </section>

            <section class="contact section-padding container" id="contact">
                <div class="contact__form-part">
                    <h2 class="section-title"><?php echo CFS()->get('title_for_contact_form_home'); ?></h2>

                    <div class="contact__contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); ?>
                    </div>
                </div>

                <div class="contact__client-part">
                    <h2 class="section-title"><?php echo CFS()->get('title_for_our_clients_home'); ?></h2>

                    <ul class="contact__clients-logo-list">
                        <?php
                        $fields = CFS()->get('our_clients_logos_home');
                        foreach ($fields as $field) {
                            ; ?>
                            <li class="contact__clients-logo-item">
                                <img src="<?php echo $field['customer_logo_contact_home']; ?>" alt="Clients logo">
                            </li>
                        <?php }; ?>
                    </ul>
                </div>
            </section>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();