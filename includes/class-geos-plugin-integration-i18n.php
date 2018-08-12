<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/geokira/
 * @since      1.0.0
 *
 * @package    Geos_Plugin_Integration
 * @subpackage Geos_Plugin_Integration/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Geos_Plugin_Integration
 * @subpackage Geos_Plugin_Integration/includes
 * @author     Geo Kiragiannis <geo@kiragiannis.com>
 */
class Geos_Plugin_Integration_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'geos-plugin-integration',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
