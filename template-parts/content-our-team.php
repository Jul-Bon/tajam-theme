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

        <li class="our-team__list-item">
            <div class="member-photo"><?php the_post_thumbnail(); ?></div>
            <div class="our-team__item-text-part">
                <h3 class="member-name"><?php the_title(); ?></h3>
                <span class="member-position"><?php echo CFS()->get('position_of_team_member'); ?></span>
            </div>
        </li>

    <?php endwhile; ?>
    <!-- End of the loop -->

    <?php wp_reset_query(); ?>
<?php endif; ?>
