<?php

namespace WRS;

/**
 * Manager Class
 */
class Hooks {

    /**
     * Constructor
     */
    public function __construct() {
        add_filter('plugin_action_links_' . plugin_basename(WRS_FILE), [$this, 'plugin_action_links']);
    }

    /**
     * Action Links
     * @since 1.0.0
     */
    public function plugin_action_links($links) {
        $links[] = '<a href="' . admin_url('admin.php?page=wp-react-starter') . '" >' . __('Settings', 'wp-react-starter') . '</a>';

        return $links;
    }
}
