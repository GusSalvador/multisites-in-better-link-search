<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.andyboehm.com
 * @since             1.0.0
 * @package           Multisites_To_Link_Search
 *
 * @wordpress-plugin
 * Plugin Name:       Add Multisites To Link Search
 * Plugin URI:        www.andyboehm.com/multisites-to-link-search
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Andy Boehm
 * Author URI:        www.andyboehm.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       multisites-to-link-search
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
define( 'MULTISITES_TO_LINK_SEARCH_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-multisites-to-link-search-activator.php
 */
function activate_multisites_to_link_search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-multisites-to-link-search-activator.php';
	Multisites_To_Link_Search_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-multisites-to-link-search-deactivator.php
 */
function deactivate_multisites_to_link_search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-multisites-to-link-search-deactivator.php';
	Multisites_To_Link_Search_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_multisites_to_link_search' );
register_deactivation_hook( __FILE__, 'deactivate_multisites_to_link_search' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-multisites-to-link-search.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_multisites_to_link_search() {

	$plugin = new Multisites_To_Link_Search();
	$plugin->run();

}
run_multisites_to_link_search();
