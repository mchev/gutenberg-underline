<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://martinchevignard.com
 * @since             1.0.0
 * @package           Guntenberg_Underline
 *
 * @wordpress-plugin
 * Plugin Name:       Gutenberg Underline
 * Plugin URI:        https://martinchevignard.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Martin Chevignard
 * Author URI:        https://martinchevignard.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gutenberg-underline
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GUNTENBERG_UNDERLINE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gutenberg-underline-activator.php
 */
function activate_gutenberg_underline() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gutenberg-underline-activator.php';
	Guntenberg_Underline_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gutenberg-underline-deactivator.php
 */
function deactivate_gutenberg_underline() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gutenberg-underline-deactivator.php';
	Guntenberg_Underline_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gutenberg_underline' );
register_deactivation_hook( __FILE__, 'deactivate_gutenberg_underline' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gutenberg-underline.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gutenberg_underline() {

	$plugin = new Guntenberg_Underline();
	$plugin->run();

}
run_gutenberg_underline();
