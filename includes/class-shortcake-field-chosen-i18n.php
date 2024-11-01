<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.perturbatio.com
 * @since      1.0.0
 *
 * @package    Shortcake_Field_Chosen
 * @subpackage Shortcake_Field_Chosen/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Shortcake_Field_Chosen
 * @subpackage Shortcake_Field_Chosen/includes
 * @author     Kris Kelly <packages@perturbatio.com>
 */
class Shortcake_Field_Chosen_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'shortcake-field-chosen',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
