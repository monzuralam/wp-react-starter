<?php

namespace WRS\Frontend;

/**
 * Frontend Class
 */
class Shortcode {

    /**
     * Initialize
     */
    public function __construct() {
        add_shortcode('wrs', [$this, 'render_shortcode']);
    }

    /**
     * Shortcode
     */
    public function render_shortcode($atts, $content){
        wp_enqueue_script('wrs-frontend');
        return '<div id="wrs-frontend-app"></div>';
    }
}
