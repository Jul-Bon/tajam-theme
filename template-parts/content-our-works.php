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

        <li class="our-works__list-item">
            <img src="<?php echo CFS()->get('work_image'); ?>" alt="Work image">
        </li>

    <?php endwhile; ?>
    <!-- End of the loop -->

    <?php wp_reset_query(); ?>
<?php endif; ?>