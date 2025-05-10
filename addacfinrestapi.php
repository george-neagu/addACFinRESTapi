<?php
/*
Plugin Name: Add ACF in REST API
Description: This plugin is meant to expose fields defined in advanced custom fields trough the WordPress API.
Version: 1.0
Author: GN
*/

if (version_compare(PHP_VERSION, '7.4', '<')) {
    add_action('admin_notices', function () {
        echo '<div class="notice notice-error"><p>Add ACF to API necesită PHP 7.4 sau mai nou.</p></div>';
    });
    return;
}



add_action('plugins_loaded', function () {
    if (function_exists('get_fields')) {
        add_action('rest_api_init', function () {
           
            $post_types = get_post_types(['public' => true, 'show_in_rest' => true]);

            foreach ($post_types as $post_type) {
                register_rest_field($post_type, 'acf', array(
                    'get_callback' => function ($post) {
                        return get_fields($post['id']);
                    },
                    'update_callback' => null,
                    'schema' => null
                ));
            }
        });
    } else {
        add_action('admin_notices', function () {
            echo '<div class="notice notice-error"><p><strong>Add ACF to API:</strong> Pluginul <code>Advanced Custom Fields</code> nu este activ. Activează ACF pentru ca acest plugin să funcționeze corect.</p></div>';
        });
    }
});

