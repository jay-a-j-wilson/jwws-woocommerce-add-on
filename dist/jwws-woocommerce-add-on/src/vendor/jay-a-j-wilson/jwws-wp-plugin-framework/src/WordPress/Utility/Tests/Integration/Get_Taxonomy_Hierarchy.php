<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\WordPress\Utility\Tests\Integration;

use JWWS\WCA\Deps\JWWS\WPPF\WordPress\Utility\Tests\Integration\Fixtures\Fixture;
use JWWS\WCA\Deps\JWWS\WPPF\WordPress\Utility\Utility;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\WordPress\Utility\Utility
 *
 * @internal
 *
 * @small
 */
final class Get_Taxonomy_Hierarchy extends Fixture {
    /**
     * @test
     */
    public function pass(): void {
        self::assertCount(
            expectedCount: 3,
            haystack: Utility::get_taxonomy_hierarchy(
                taxonomy: 'category',
            )[0]->children,
        );
    }
}
