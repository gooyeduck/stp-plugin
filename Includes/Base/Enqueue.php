<?php
/**
 * @package  AlecadddPlugin
 */
namespace STP\Base;

class Enqueue  {

	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
	}

	/**
	 * Enqueue admin scripts and styles.
	 */
	public function admin_enqueue_scripts() {
		// Enqueue the CSS file for the plugin.
		wp_enqueue_style(
			'stp_plugin_style',
			$this->plugin_url . 'assets/starter-style.css',
			array(),
			$this->plugin_version
		);

		// Enqueue the JavaScript file for the plugin.
		wp_enqueue_script(
			'stp_plugin_script',
			$this->plugin_url . 'assets/starter-script.js',
			array( 'jquery' ),
			$this->plugin_version,
			true
		);
	}
}
