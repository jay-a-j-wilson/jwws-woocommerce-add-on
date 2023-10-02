<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules\Collabs\Core;

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

final class Core {
    public static function new_instance(): self {
        return new self();
    }

    /**
     * @return void
     */
    private function __construct() {}

    public function hook(): void {}
}
