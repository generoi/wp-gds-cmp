<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://generogrowth.com/
 * @since             1.0.0
 * @package           Wp_Gds_Cmp
 *
 * @wordpress-plugin
 * Plugin Name:       Genero Design System CMP
 * Plugin URI:        https://github.com/generoi/wp-gds-cmp
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Genero
 * Author URI:        https://generogrowth.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-gds-cmp
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
define( 'WP_GDS_CMP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-gds-cmp-activator.php
 */
function activate_wp_gds_cmp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-gds-cmp-activator.php';
	Wp_Gds_Cmp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-gds-cmp-deactivator.php
 */
function deactivate_wp_gds_cmp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-gds-cmp-deactivator.php';
	Wp_Gds_Cmp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_gds_cmp' );
register_deactivation_hook( __FILE__, 'deactivate_wp_gds_cmp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-gds-cmp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_gds_cmp() {

	$plugin = new Wp_Gds_Cmp();
	$plugin->run();

}
run_wp_gds_cmp();
