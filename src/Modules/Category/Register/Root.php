<?php

namespace JWWS\WooCommerce_Add_On\Modules\Category\Register;

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * @source https://developer.wordpress.org/reference/hooks/manage_posts_columns/
 */
class Root {
    /**
     * @return void
     */
    public static function hook(): void {
        add_action(
            'manage_posts_columns',
            [__CLASS__, 'register'],
        );
    }

    /**
     * @param array $columns
     *
     * @return array
     */
    public static function register(array $columns): array {
        return (new self(columns: $columns))->register_columns();
    }

    /**
     * @param array $columns
     *
     * @return void
     */
    public function __construct(private array $columns) {
    }

    /**
     * @return array
     */
    public function register_columns(): array {
        $this->columns['my-column'] = __(
            text: 'My Column',
            domain: 'jwws',
        );

        return $this->columns;
    }
}
