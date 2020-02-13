<?php
/*
Plugin Name: Platzi Plugin
Plugin URI:  https://amazingweb.website
Description: Plugin para el CPT viaje
Version:     1.0
Author:      nombre de perfil en wordpress.org
Author URI:  https://amazingweb.website
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: platziplugin // sirve para las traducciones  , hay que hacerlo en ingles
Domain Path: /languages
*/function add_role_viajero()
{
    // remover role antes de poder cambiarlo
    remove_role('viajero');

    add_role(
      'viajero',
      'Viajero',
      [
          'read'         => true,
          'edit_posts'   => true,
          'upload_files' => true,
          'publish_posts' => true,
          'delete_posts' => true,
          'edit_published_posts' => true,
      ]
  );
}

// Add the simple_role.
add_action('init', 'add_role_viajero');


function wporg_options_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
<div class="wrap">
  <h1><?= esc_html(get_admin_page_title()); ?></h1>
  <form action="" method="post">
    <?php
            // output security fields for the registered setting "wporg_options"
            settings_fields('wporg_options');
            // output setting sections and their fields
            // (sections are registered for "wporg", each field is registered to a specific section)
            do_settings_sections('wporg');
            // output save settings button
            submit_button('Save Settings');
            ?>
  </form>
</div>
<?php
}

function wporg_options_page()
{
    add_menu_page(
        'WPOrg',
        'WPOrg Options',
        'manage_options',
        'wporg',
        'wporg_options_page_html',
        '',
        20
    );
}
add_action('admin_menu', 'wporg_options_page');

function register_mysettings() { // whitelist options
  register_setting( 'wporg_options', 'new_option_name' );
  register_setting( 'wporg_options', 'some_other_option' );
  register_setting( 'wporg_options', 'option_etc' );
}