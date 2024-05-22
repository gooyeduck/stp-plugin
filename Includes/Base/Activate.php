<?php
/**
 * @package  AlecadddPlugin
 */
namespace STP\Base;

class Activate {
	public static function activate() {
		flush_rewrite_rules();
	}
}
