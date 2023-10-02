<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules;

use JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Extensions;

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

final class Modules {
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
        Extensions::new_instance()->hook();
    }
}
