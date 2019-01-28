<?php
$fields = CFS()->get('our_clients_logos_home');
foreach ($fields as $field) {
    ; ?>
    <li class="contact__clients-logo-item">
        <img src="<?php echo $field['customer_logo_contact_home']; ?>" alt="Clients logo">
    </li>
<?php }; ?>