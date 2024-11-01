<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.perturbatio.com
 * @since             1.0.0
 * @package           Shortcake_Field_Chosen
 *
 * @wordpress-plugin
 * Plugin Name:       Shortcake Field - Chosen
 * Plugin URI:        shortcake-field-chosen
 * Description:       Provides a jQuery chosen select field as an option for the Shortcake (Shortcode UI) plugin.
 * Version:           1.2.0
 * Author:            Kris Kelly
 * Author URI:        http://www.perturbatio.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       shortcake-field-chosen
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-shortcake-field-chosen-activator.php
 */
function activate_shortcake_field_chosen() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-shortcake-field-chosen-activator.php';
	Shortcake_Field_Chosen_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-shortcake-field-chosen-deactivator.php
 */
function deactivate_shortcake_field_chosen() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-shortcake-field-chosen-deactivator.php';
	Shortcake_Field_Chosen_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_shortcake_field_chosen' );
register_deactivation_hook( __FILE__, 'deactivate_shortcake_field_chosen' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-shortcake-field-chosen.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_shortcake_field_chosen() {

	$plugin = new Shortcake_Field_Chosen();
	$plugin->run();

}
run_shortcake_field_chosen();
