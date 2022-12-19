<?php

namespace JWWS\WooCommerce_Add_On\Modules\Category;

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Root.
 */
Class Root {
    /**
     * @return void
     */
    public static function hook(): void {
        Register\Root::hook();
        Render\Root::hook();
    }
}
