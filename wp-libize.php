 <?php

 /**
  * The plugin bootstrap file
  *
  * This file is read by WordPress to generate the plugin information in the plugin
  * admin area. This file also includes all of the dependencies used by the plugin,
  * registers the activation and deactivation functions, and defines a function
  * that starts the plugin.
  *
  * @link              https://scrap.libize.com/
  * @since             1.0.0
  * @package           Wp_Libize
  *
  * @wordpress-plugin
  * Plugin Name:       Libize
  * Description:       Libize est une extension pour lier sa boutique à l'application Libize.
  * Version:           1.0.1
  * Requires at least: 5.2
  * Requires PHP:      7.2
  * Author:            Libize
  * Text Domain:       libize
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
 define( 'WP_LIBIZE_VERSION', '1.0.1' );

 /**
  * The code that runs during plugin activation.
  * This action is documented in includes/class-wp-libize-activator.php
  */
 function activate_wp_libize() {
 	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-libize-activator.php';
 	Wp_Libize_Activator::activate();
 }

 /**
  * The code that runs during plugin deactivation.
  * This action is documented in includes/class-wp-libize-deactivator.php
  */
 function deactivate_wp_libize() {
 	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-libize-deactivator.php';
 	Wp_Libize_Deactivator::deactivate();
 }

 register_activation_hook( __FILE__, 'activate_wp_libize' );
 register_deactivation_hook( __FILE__, 'deactivate_wp_libize' );

 /**
  * The core plugin class that is used to define internationalization,
  * admin-specific hooks, and public-facing site hooks.
  */
 require plugin_dir_path( __FILE__ ) . 'includes/class-wp-libize.php';

 /**
  * Begins execution of the plugin.
  *
  * Since everything within the plugin is registered via hooks,
  * then kicking off the plugin from this point in the file does
  * not affect the page life cycle.
  *
  * @since    1.0.0
  */
 function run_wp_libize() {

 	$plugin = new Wp_Libize();
 	$plugin->run();

 }
 run_wp_libize();
