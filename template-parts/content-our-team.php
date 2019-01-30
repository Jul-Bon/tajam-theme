<li class="our-team__list-item">
    <div class="member-photo"><?php the_post_thumbnail(); ?></div>
    <div class="our-team__item-text-part">
        <h3 class="member-name"><?php the_title(); ?></h3>
        <span class="member-position"><?php echo CFS()->get('position_of_team_member'); ?></span>
    </div>
</li>

