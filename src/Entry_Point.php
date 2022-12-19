<?php

namespace JWWS\WooCommerce_Add_On;

use JWWS\WooCommerce_Add_On\Modules\Category;
use JWWS\WP_Plugin_Framework\Loader\{
    Plugin,
    PHP_Version_Checker\PHP_Version_Checker,
    PHP_Version
};

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 */
class Entry_Point {
    /**
     * @param Plugin $plugin
     */
    public function __construct(
        private Plugin $plugin,
        private array $dependant_plugins
    ) {
    }

    /**
     * @return void
     */
    public function activate(): void {
        $php_version = new PHP_Version(
            min: '8.0.0',
            max: '8.1.0',
        );

        (new PHP_Version_Checker(
            plugin: $this->plugin,
            php_version: $php_version,
        ))->is_at_least_min_version();
    }

    /**
     * @param string $plugin path to the plugin file relative to the plugins directory
     *
     * @return void
     */
    public function deactivate(string $plugin): void {
        foreach ($this->dependant_plugins as $dependant_plugin) {
            if ($plugin !== $dependant_plugin->get_filename()) {
                continue;
            }

            deactivate_plugins(plugins: $this->plugin->get_filename());
        }
    }

    /**
     * @return void
     */
    public function load(): void {
        add_action('admin_init', [$this, 'activate']);
        add_action(
            'deactivated_plugin',
            [$this, 'deactivate'],
            10,
            1,
        );

        Category\Root::hook();
    }
}
