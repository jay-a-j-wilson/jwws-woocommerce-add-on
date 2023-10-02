<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Tests\Unit;

use JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Tests\Unit\Fixtures\Collection_Factory;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\Collection\Standard_Collection\Standard_Collection
 *
 * @internal
 *
 * @small
 */
final class Add extends TestCase {
    /**
     * @test
     */
    public function pass(): void {
        $sut = Collection_Factory::create_and_get();

        $sut->add('six', 'seven');
        self::assertCount(expectedCount: 7, haystack: $sut);
        self::assertTrue(
            condition: $sut->contains_value(value: 'six'),
        );
    }
}
