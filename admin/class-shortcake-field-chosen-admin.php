<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.perturbatio.com
 * @since      1.0.0
 *
 * @package    Shortcake_Field_Chosen
 * @subpackage Shortcake_Field_Chosen/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Shortcake_Field_Chosen
 * @subpackage Shortcake_Field_Chosen/admin
 * @author     Kris Kelly <packages@perturbatio.com>
 */
class Shortcake_Field_Chosen_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param      string $plugin_name The name of this plugin.
	 * @param      string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Shortcake_Field_Chosen_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Shortcake_Field_Chosen_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */


	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Shortcake_Field_Chosen_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Shortcake_Field_Chosen_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( 'es6.polyfill.promise', plugin_dir_url( __FILE__ ) . 'js/es6-promise.auto.min.js', array(  ), '4.1.0', false );
		wp_enqueue_script( 'jquery.plugin.chosen', plugin_dir_url( __FILE__ ) . 'js/chosen_v1.6.2/chosen.jquery.min.js', array( 'jquery' ), '1.6.2', false );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/shortcake-field-chosen-admin.js', array(
			'jquery',
			'es6.polyfill.promise',
			'jquery.plugin.chosen',
		), $this->version, false );

	}

}
