<?php

namespace WRS;

if (! defined('ABSPATH')) exit;

class Enqueue {

    private static $instance = null;

    /**
     * Constructor
     */
    public function __construct() {
        // Frontend scripts
        add_action('wp_enqueue_scripts', array($this, 'frontend_scripts'));

        // Admin scripts
        add_action('admin_enqueue_scripts', array($this, 'admin_scripts'));
    }

    /**
     * Frontend Assets
     * @since 1.0.0
     */
    public function frontend_scripts() {
        wp_register_script('wrs-frontend', WRS_URL . '/assets/build/frontend.js', array('jquery'), WRS_VERSION, true);
    }

    /**
     * Admin Assets
     * @since 1.0.0
     */
    public function admin_scripts($hook) {
        wp_enqueue_script('wrs-admin', WRS_URL . '/assets/build/admin.js', array('jquery'), WRS_VERSION, true);
    }

    public static function instance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}

Enqueue::instance();
