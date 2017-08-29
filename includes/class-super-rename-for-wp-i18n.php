<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://magneticmule.com
 * @since      1.0.0
 *
 * @package    Super_Rename_For_Wp
 * @subpackage Super_Rename_For_Wp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Super_Rename_For_Wp
 * @subpackage Super_Rename_For_Wp/includes
 * @author     Thomas Sweeney <magneticmule@gmail.com>
 */
class Super_Rename_For_Wp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'super-rename-for-wp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
