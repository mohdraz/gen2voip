<?php

/*

@package gen2voip

=============================
    ADMIN HEADER PAGE
==============================

*/

function gen2voip_add_admin_page() {
    add_menu_page('Gen2Voip Options', 'Options', 'manage_options', 'gen2voip_options', 'gen2voip_theme_create_page', 'dashicons-id-alt', 110);
    //Activate Custom Setting
    add_action('admin_init', 'gen2voip_custom_settings');
}

add_action('admin_menu', 'gen2voip_add_admin_page');


function gen2voip_theme_create_page() {
    require_once(get_stylesheet_directory() . '/inc/templates/gen2voip-options.php');
}
function gen2voip_custom_settings() {
    // register options
    register_setting('gen2voip-settings-option-1', 'phone_number-1');
    register_setting('gen2voip-settings-option-2', 'phone_number-2');
    register_setting('gen2voip-settings-option-3', 'phone_number-3');

    register_setting('gen2voip-settings-option', 'phone_number');

    register_setting('gen2voip-settings-option', 'email');


    // add section
    add_settings_section('gen2voip-options-custom', '', 'gen2voip_custom_options', 'gen2voip_options');

    //add section fields
    add_settings_field('header-phone', 'Phone Number', 'gen2voip_option_phone', 'gen2voip_options', 'gen2voip-options-custom');


    // add_settings_field('header-phone', 'Main Number_Ltr', 'gen2voip_options_phone', 'gen2voip_options', 'gen2voip-options-custom');
    // add_settings_field('header-phone_2', 'Main Number', 'gen2voip_options_phone_2', 'gen2voip_options', 'gen2voip-options-custom');
    // add_settings_field('header-phone_3', 'Sales Number', 'gen2voip_options_phone_3', 'gen2voip_options', 'gen2voip-options-custom');

    add_settings_field('header-email', 'Email Address', 'gen2voip_options_email', 'gen2voip_options', 'gen2voip-options-custom');

}

function gen2voip_custom_options() {
    echo 'Options';
}


// setion filed functions 

function gen2voip_option_phone() {
    $phone = esc_attr(get_option('phone_number'));
    echo '<input type="tel" name="phone_number" value="'.$phone.'" placeholder="Phone Number" />';
}

// function gen2voip_option_phone() {
//     $phone = esc_attr(get_option('phone_number'));
//     echo '<input type="tel" name="phone_number" value="'.$phone.'" placeholder="Phone Number" />';
// }

function gen2voip_options_phone_2() {
    $phone = esc_attr(get_option('phone_number_2'));
    echo '<input type="tel" name="phone_number_2" value="'.$phone.'" placeholder="Phone Number" />';
}

function gen2voip_options_phone_3() {
    $phone = esc_attr(get_option('phone_number_3'));
    echo '<input type="tel" name="phone_number_3" value="'.$phone.'" placeholder="Phone Number" />';
}

function gen2voip_options_email() {
    $email = esc_attr(get_option('email'));
    echo '<input type="email" name="email" value="'.$email.'" placeholder="Email Address" />';
}