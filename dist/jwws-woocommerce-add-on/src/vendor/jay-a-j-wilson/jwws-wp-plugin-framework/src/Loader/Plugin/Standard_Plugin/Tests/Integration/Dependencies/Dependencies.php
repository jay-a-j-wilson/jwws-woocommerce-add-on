<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Loader\Plugin\Standard_Plugin\Subclasses\Standard_Plugin\Tests\Integration\Dependencies;

use JWWS\WCA\Deps\JWWS\WPPF\Loader\Plugin\Plugin;
use JWWS\WCA\Deps\JWWS\WPPF\Loader\Standard_Loader\Tests\Integration\Fixtures\Akismet_Plugin_Factory;
use JWWS\WCA\Deps\JWWS\WPPF\Loader\Standard_Loader\Tests\Integration\Fixtures\Basic_Plugin_Factory;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\Loader\Plugin\Standard_Plugin\Standard_Plugin
 *
 * @internal
 *
 * @small
 */
final class Dependencies extends \WP_UnitTestCase {
    protected Plugin $dependency;

    protected function setUp(): void {
        parent::setUp();

        $this->dependency = Akismet_Plugin_Factory::create_and_get();
    }

    /**
     * @test
     */
    public function pass(): void {
        self::assertSame(
            expected: [$this->dependency],
            actual: Basic_Plugin_Factory::create_and_get()
                ->add_dependencies(plugins: $this->dependency)
                ->dependencies()
                ->to_array(),
        );
    }
}
