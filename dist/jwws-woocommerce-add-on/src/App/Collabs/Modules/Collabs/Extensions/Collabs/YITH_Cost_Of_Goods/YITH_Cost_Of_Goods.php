<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods;

use JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods\Collabs\Cost_Field\Cost_Field;
use YITH_COG_Admin_Premium;

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

final class YITH_Cost_Of_Goods {
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

    public function hook(): void {
        if (class_exists(class: YITH_COG_Admin_Premium::class)) {
            remove_action(
                'woocommerce_product_after_variable_attributes',
                [
                    YITH_COG_Admin_Premium::get_instance(),
                    'add_cost_field_to_product_variation',
                ],
                15,
                3,
            );
        }

        add_action(
            'woocommerce_variation_options_pricing',
            [Cost_Field::new_instance(), 'add'],
            1,
            3,
        );
    }
}
