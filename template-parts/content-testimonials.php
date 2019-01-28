
<div class="testimonials__list slider-for">
    <?php
    //The query
    $args = array(
        'post_type' => 'testimonials',
        'order' => 'ASC'
    );
    $testimonials = new WP_Query($args); ?>

    <?php if ($testimonials->have_posts()): ?>

        <!-- The loop -->
        <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
            <li class="testimonials__list-item">
                <div class="testimonial__text"><?php the_content(); ?></div>
                <h3 class="testimonial__client-name"><?php the_title(); ?></h3>
                <span class="testimonial__client-position"><?php echo CFS()->get('client_position_testimonials'); ?></span>
            </li>
        <?php endwhile; ?>
        <!-- End of the loop -->

        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>


<div class="testimonials__nav-list slider-nav">
    <?php
    //The query
    $args = array(
        'post_type' => 'testimonials',
        'order' => 'ASC'
    );
    $testimonials = new WP_Query($args); ?>

    <?php if ($testimonials->have_posts()): ?>

        <!-- The loop -->
        <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
            <div class="client-photo"><?php the_post_thumbnail(); ?></div>
        <?php endwhile; ?>
        <!-- End of the loop -->

        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>