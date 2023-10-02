<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Tests\Unit\Array_Access;

use JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Standard_Collection;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Standard_Collection
 *
 * @internal
 *
 * @small
 */
final class Offset_Unset extends TestCase {
    /**
     * @test
     */
    public function pass(): void {
        $sut = Standard_Collection::of('foo', 'bar', 'baz');

        $sut->offsetUnset(key: 1);

        self::assertSame(
            expected: [0 => 'foo', 2 => 'baz'],
            actual: $sut->to_array(),
        );
    }
}
