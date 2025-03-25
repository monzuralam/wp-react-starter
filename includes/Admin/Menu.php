<?php
namespace WRS\Admin;

if ( ! defined( 'ABSPATH' ) ) exit;


class Menu {

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_menu_page' ) );
	}

	public function add_menu_page() {
		add_menu_page( __( 'WP React Starter', 'wp-react-starter' ), __( 'WP React Starter', 'wp-react-starter' ), 'manage_options', 'wp-react-starter', array(
			$this,
			'render_admin_page'
		) );
	}

	public function render_admin_page() {
		echo '<div id="wp-react-starter" class="wp-react-starter"></div>';
	}
}