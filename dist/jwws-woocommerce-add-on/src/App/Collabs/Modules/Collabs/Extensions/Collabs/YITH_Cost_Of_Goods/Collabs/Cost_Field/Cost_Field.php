<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods\Collabs\Cost_Field;

use JWWS\WCA\Deps\JWWS\WPPF\Template\Template;
use JWWS\WCA\Deps\JWWS\WPPF\WordPress\Meta\Subclasses\Post_Meta\Post_Meta;
use WP_Post;

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

final class Cost_Field {
    /**
     * Factory method.
     */
    public static function new_instance(): self {
        return new self();
    }

    /**
     * @return void
     */
    private function __construct() {}

    /**
     * Add cost field to variable products under the price.
     */
    public function add(
        int $loop,
        array $variation_data,
        WP_Post $variation,
    ): void {
        $default_cost = Post_Meta::of(id: $variation->ID)
            ->find_by_key(key: 'yith_cog_default_cost')
        ;

        // if the variation cost is actually the default variable product cost.
        $cost = $default_cost === 'yes'
            ? ''
            : Post_Meta::of(id: $variation->ID)
                ->find_by_key(key: 'yith_cog_cost')
        ;

        echo Template::of(path: __DIR__ . '/templates/template.html.php')
            ->assign(key: 'loop', value: $loop)
            ->assign(key: 'cost', value: $cost)
            ->assign(
                key: 'cost_variable',
                value: Post_Meta::of(id: $variation->post_parent)
                    ->find_by_key(key: 'yith_cog_cost_variable'),
            )
            ->output()
        ;
    }
}
