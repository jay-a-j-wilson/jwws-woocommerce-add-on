<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules\Collabs\Extensions;

use JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods\YITH_Cost_Of_Goods;
use JWWS\WCA\App\Common\Enums\Plugin_Basename;

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

final class Extensions {
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
        if (is_plugin_active(plugin: Plugin_Basename::YITH_COST_OF_GOODS->value)) {
            YITH_Cost_Of_Goods::new_instance()->hook();
        }
    }
}
