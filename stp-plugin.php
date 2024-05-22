<?php
/**
 * Plugin Name: Starter Plugin
 * Plugin URI:  www.facebook.com
 * Description: A testing assignment
 * Version:     1.0.0
 * Author:      Satyajit Talukdar
 * Author URI:  www.facebook.com
 * Text Domain: stp-plugin
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     Starter Plugin
 * @author      Satyajit Talukdar
 * @copyright   2024
 * @license     GPL-2.0+
 *
 *
 * Prefix: WPTM
 */

use STP\Bootstrap;


if ( ! defined( 'ABSPATH' ) ) {
	die();
}

if ( ! file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	return;
}

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Define plugin __FILE__
 */
if ( ! defined( 'STP_PLUGIN_FILE' ) ) {
	define( 'STP_PLUGIN_FILE', __FILE__ );
}

/**
 * Define plugin directory URL.
 */
if ( ! defined( 'STP_PLUGIN_DIR_URL' ) ) {
	define( 'STP_PLUGIN_DIR_URL', plugin_dir_url( STP_PLUGIN_FILE ) );
}

/**
 * Define plugin directory path.
 */
if ( ! defined( 'STP_PLUGIN_DIR_PATH' ) ) {
	define( 'STP_PLUGIN_DIR_PATH', plugin_dir_path( STP_PLUGIN_FILE ) );
}



function activate_starter_plugin() {
	STP\Base\Activate::activate();
}
function deactivate_starter_plugin() {
	STP\Base\Deactivate::deactivate();
}

/**
* Deactivation hook register.
*/
register_activation_hook( __FILE__, 'activate_starter_plugin' );

/**
* Deactivation hook register.
*/
register_deactivation_hook( __FILE__, 'deactivate_starter_plugin' );


/**
 * Initialize the plugin functionality.
 *
 * @since  1.0.0
 *
 * @return Bootstrap
 */
function stp_plugin(): Bootstrap {
	return Bootstrap::instance();
}

// Call initialization function.
stp_plugin();