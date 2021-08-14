<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://martinchevignard.com
 * @since      1.0.0
 *
 * @package    Guntenberg_Underline
 * @subpackage Guntenberg_Underline/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Guntenberg_Underline
 * @subpackage Guntenberg_Underline/includes
 * @author     Martin Chevignard <martin.chevignard@gmail.com>
 */
class Guntenberg_Underline_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gutenberg-underline',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
