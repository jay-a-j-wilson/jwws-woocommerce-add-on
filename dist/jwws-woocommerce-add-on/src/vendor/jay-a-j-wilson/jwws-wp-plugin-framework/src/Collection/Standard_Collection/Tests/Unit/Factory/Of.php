<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Tests\Unit\Factory;

use JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Standard_Collection;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Standard_Collection
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
            expected: Standard_Collection::class,
            actual: Standard_Collection::of(),
        );
    }
}
