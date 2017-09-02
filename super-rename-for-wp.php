<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://magneticmule.com
 * @since             1.0.0
 * @package           Super_Rename_For_Wp
 *
 * @wordpress-plugin
 * Plugin Name:       Super Rename for WP
 * Plugin URI:        http://magneticmule.com/wprename
 * Description:       Super Rename for WP allow you to easily rename slugs, user roles and menu items.
 * Version:           1.0.0
 * Author:            Thomas Sweeney
 * Author URI:        http://magneticmule.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       super-rename-for-wp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-super-rename-for-wp-activator.php
 */
function activate_super_rename_for_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-super-rename-for-wp-activator.php';
	Super_Rename_For_Wp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-super-rename-for-wp-deactivator.php
 */
function deactivate_super_rename_for_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-super-rename-for-wp-deactivator.php';
	Super_Rename_For_Wp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_super_rename_for_wp' );
register_deactivation_hook( __FILE__, 'deactivate_super_rename_for_wp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-super-rename-for-wp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_super_rename_for_wp() {

	$plugin = new Super_Rename_For_Wp();
	$plugin->run();

}
run_super_rename_for_wp();
