<h1>Gen2Voip Custom Options</h1>
<?php settings_errors(); ?>

<div class="adminHeaderContainer">
    <form method="post" action="options.php" class="vpsecurity-header-form">
        <?php settings_fields('gen2voip-settings-option'); ?>
        <?php do_settings_sections('gen2voip_options'); ?>
        <?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>
    </form>
</div>