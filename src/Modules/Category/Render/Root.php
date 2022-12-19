<?php

namespace JWWS\WooCommerce_Add_On\Modules\Category\Render;

use function JWWS\WP_Plugin_Framework\Functions\Debug\console_log;

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
            'manage_posts_custom_column',
            [__CLASS__, 'register'],
        );
    }

    /**
     * @param string $column_name
     *
     * @return string
     */
    public static function register(string $column_name): void {
        (new self(column_name: $column_name))->render_column();
    }

    /**
     * @param string $column_name
     *
     * @return void
     */
    public function __construct(private string $column_name) {
    }

    /**
     * @return void
     */
    public function render_column(): void {
        if ($this->column_name !== 'my-column') {
            return;
        }

        $categories = get_the_terms(
            post: get_post()->ID,
            taxonomy: 'product_cat',
        );

        if (! $categories) {
            return;
        }

        foreach ($categories as $category) {
            $ancestors = get_ancestors(
                object_id: $category->term_id,
                object_type: $category->taxonomy,
            );

            if ($ancestors) {
                foreach ($ancestors as $ancestor) {
                    $ancestor_categories[] = get_term($ancestor)->name;
                }

                $all_categories = array_reverse($ancestor_categories);
            }
            
            $all_categories[] = $category->name;

            $output = implode(array: $all_categories, separator: ' > ');

            $x[] = $output;

            // console_log();
            //echo $category->name;
        }

        console_log($output);

        echo implode(array: $x, separator: ',<br>');
    }
}
