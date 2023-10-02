<?php declare(strict_types=1);

namespace JWWS\WCA\App\Factory;

use const JWWS\WCA\PLUGIN_DIR;
use JWWS\WCA\App\App;
use JWWS\WCA\Deps\JWWS\WPPF\Loader\Plugin\Standard_Plugin\Standard_Plugin;
use JWWS\WCA\Deps\JWWS\WPPF\Loader\Standard_Loader\Standard_Loader;
use JWWS\WCA\App\Common\Enums\Plugin_Basename;

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

final class Factory {
    public static function new_instance(): self {
        return new self();
    }

    /**
     * @return void
     */
    private function __construct() {}

    public function create(): App {
        return App::of(
            loader: Standard_Loader::of(
                plugin: Standard_Plugin::of_slug(
                    slug: PLUGIN_DIR,
                    fallback_name: 'Admin Columns Add-On',
                )
                    ->add_dependencies(
                        plugins: Standard_Plugin::of_basename(
                            basename: Plugin_Basename::WOOCOMMERCE->value,
                            fallback_name: 'WooCommerce',
                        ),
                    ),
            ),
        );
    }
}
