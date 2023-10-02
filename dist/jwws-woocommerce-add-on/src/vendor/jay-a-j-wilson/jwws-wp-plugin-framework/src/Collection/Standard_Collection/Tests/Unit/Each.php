<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Tests\Unit;

use JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Standard_Collection;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Standard_Collection
 *
 * @internal
 *
 * @small
 */
final class Each extends TestCase {
    /**
     * @test
     */
    public function pass(): void {
        $called = 0;

        Standard_Collection::of(1, 2, 3)
            ->each(function () use (&$called): void {
                $called++;
            })
        ;

        self::assertSame(expected: 3, actual: $called);
    }

    /**
     * @test
     */
    public function pass_empty(): void {
        $called = false;

        Standard_Collection::of()
            ->each(function () use (&$called): void {
                $called = true;
            })
        ;

        self::assertFalse(condition: $called);
    }
}
