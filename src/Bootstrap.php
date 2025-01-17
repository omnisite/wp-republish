<?php
/**
 * This file contains the logic for Bootstrap.
 *
 * @package AchttienVijftien\Plugin\Republish
 */

namespace AchttienVijftien\Plugin\Republish;

require plugin_dir_path( __FILE__ ) . 'Admin.php';
require plugin_dir_path( __FILE__ ) . 'Admin/SetDate.php';

/**
 * Bootstrap plugin.
 */
class Bootstrap {

	/**
	 * Instance.
	 *
	 * @var self
	 */
	private static $instance;

	/**
	 * Get (singleton) instance.
	 *
	 * @return $this
	 */
	public static function get_instance(): self {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Initialize plugin.
	 */
	public function init(): void {
		add_action( 'admin_init', [ $this, 'init_admin' ] );
	}

	/**
	 * Initialize admin.
	 */
	public function init_admin(): void {
		new Admin();
	}
}
