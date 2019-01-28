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