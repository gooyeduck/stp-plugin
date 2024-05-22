<?php
/**
 * All necessary custom functions will be here.
 *
 * @package WPBP
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'sgsb_assets_url' ) ) {
	/**
	 * Get plugin assets url.
	 *
	 * @param string $path Plugin path.
	 */
	function stp_assets_url( $path ) {
		return STP_PLUGIN_DIR_URL . 'assets/' . $path;
	}
}

if ( ! function_exists( 'sgsb_plugin_path' ) ) {
	/**
	 * Get plugin file path.
	 *
	 * @param string $path Plugin path.
	 */
	function stp_plugin_path( $path ) {
		return STP_PLUGIN_DIR_PATH . $path;
	}
}

if ( ! function_exists( 'stp_get_file_content' ) ) {
	/**
	 * Get plugin file path.
	 *
	 * @param string $path Plugin path.
	 */
	function stp_get_file_content( $path ) {
		ob_start();

		require STP_PLUGIN_DIR_PATH . $path;

		return ob_get_clean();
	}
}

if ( ! function_exists( 'stp_find_option_setting' ) ) {
	/**
	 * Find a settings value from array.
	 *
	 * @param array  $settings WP option array.
	 * @param string $key Key from option array.
	 * @param string $default1 Default value.
	 */
	function stp_find_option_setting( $settings, $key, $default1 = '' ) {
		if ( isset( $settings[ $key ] ) ) {
			return $settings[ $key ];
		}

		return $default1;
	}
}


