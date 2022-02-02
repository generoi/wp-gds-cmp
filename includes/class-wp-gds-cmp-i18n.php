<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://generogrowth.com/
 * @since      1.0.0
 *
 * @package    Wp_Gds_Cmp
 * @subpackage Wp_Gds_Cmp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Gds_Cmp
 * @subpackage Wp_Gds_Cmp/includes
 * @author     Genero <christoffer.bjorkskog@genero.fi>
 */
class Wp_Gds_Cmp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-gds-cmp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
