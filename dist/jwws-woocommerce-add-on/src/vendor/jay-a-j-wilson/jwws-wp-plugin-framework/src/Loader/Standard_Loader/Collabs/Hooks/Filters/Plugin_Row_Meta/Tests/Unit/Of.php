<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Loader\Standard_Loader\Collabs\Hooks\Filters\Plugin_Row_Meta\Tests\Unit;

use JWWS\WCA\Deps\JWWS\WPPF\Loader\Plugin\Plugin;
use JWWS\WCA\Deps\JWWS\WPPF\Loader\Standard_Loader\Collabs\Hooks\Filters\Plugin_Row_Meta\Plugin_Row_Meta;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\Loader\Standard_Loader\Collabs\Hooks\Filters\Plugin_Row_Meta\Plugin_Row_Meta
 *
 * @internal
 *
 * @small
 */
final class Of extends TestCase {
    /**
     * @test
     */
    public function pass(): void {
        self::assertInstanceOf(
            expected: Plugin_Row_Meta::class,
            actual: Plugin_Row_Meta::of(
                plugin: self::createStub(originalClassName: Plugin::class),
            ),
        );
    }
}
