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
            unset($all_categories); // reset array

            $ancestor_ids = get_ancestors(
                object_id: $category->term_id,
                object_type: $category->taxonomy,
            );

            if ($ancestor_ids) {
                $all_categories = $this->get_ancestor_names($ancestor_ids);
            }
            
            $all_categories[] = $category->name;

            $output[] = implode(array: $all_categories, separator: ' <span style="color: #999">&raquo;</span> ');
        }

        echo implode(array: $output, separator: '<br><br>');
    }

    /**
     * @param array $ancestor_ids 
     * 
     * @return array 
     */
    private function get_ancestor_names(array $ancestor_ids): array {
        foreach ($ancestor_ids as $ancestor_id) {
            $ancestor_names[] = '<span style="color: #999">' . get_term(term: $ancestor_id)->name . '</span>';
        }

        return array_reverse($ancestor_names);
    }
}
