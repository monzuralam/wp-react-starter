<?php

/**
 * Plugin Name: WP React Starter
 * Plugin URI: https://github.com/monzuralam/wp-react-starter
 * Description: A simple WordPress React Starter Plugin for WordPress.
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Version: 1.0.0
 * Author: Monzur Alam
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: wp-react-starter
 */

defined('ABSPATH') || exit;

require __DIR__ . '/vendor/autoload.php';

/**
 * wp_react_starter Class
 */
final class WP_React_Starter {

    /**
     * Plugin version
     *
     * @var string
     */
    private $version = '1.0.0';

    /**
     * Instances array
     *
     * @var array
     */
    private $instances = [];

    /**
     * Initialize
     */
    public function __construct() {
        // define constants
        $this->define_constants();

        // run the installer
        register_activation_hook(__FILE__, [$this, 'activate']);

        // localization setup
        add_action('init', [$this, 'localization_setup']);

        // load the plugin
        add_action('plugins_loaded', [$this, 'init_plugin']);
    }

    /**
     * Define constants
     *
     * @return void
     */
    private function define_constants() {
        define('WRS_VERSION', $this->version);
        define('WRS_FILE', __FILE__);
        define('WRS_PATH', dirname(WRS_FILE));
        define('WRS_INCLUDES', WRS_PATH . '/includes');
        define('WRS_URL', plugins_url('', WRS_FILE));
        define('WRS_ASSETS', WRS_URL . '/assets');
    }

    /**
     * Run the installer
     *
     * @return void
     */
    public function activate() {
    }

    /**
     * Initialize plugin for localization
     *
     * @return void
     * @since 1.0.0
     *
     */
    public function localization_setup() {
        load_plugin_textdomain('wp-react-starter', false, dirname(plugin_basename(WRS_FILE)) . '/languages/');
    }

    /**
     * Initialize the plugin
     *
     * @return void
     */
    public function init_plugin() {
        if (is_admin()) {
            new WRS\Admin();
        }

        if( ! is_admin() ){
            new WRS\Frontend\Shortcode();
        }

        new WRS\Enqueue();
        new WRS\Hooks();
    }

    /**
     * Initializes the wp_react_starter class
     *
     * Checks for an existing wp_react_starter instance
     * and if it doesn't find one, creates it.
     */
    public static function instance() {
        static $instance = false;

        if (! $instance) {
            $instance = new self();
        }

        return $instance;
    }
}

/**
 * Return the instance
 *
 * @return \wp_react_starter
 */
function wp_react_starter() {
    return WP_React_Starter::instance();
}

// take off
wp_react_starter();
