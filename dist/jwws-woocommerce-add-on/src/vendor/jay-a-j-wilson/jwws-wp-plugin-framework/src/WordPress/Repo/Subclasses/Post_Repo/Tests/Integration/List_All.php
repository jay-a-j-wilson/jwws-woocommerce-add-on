<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\WordPress\Repo\Subclasses\Post_Repo\Tests\Integration;

use JWWS\WCA\Deps\JWWS\WPPF\WordPress\Repo\Subclasses\Post_Repo\Post_Repo;
use JWWS\WCA\Deps\JWWS\WPPF\WordPress\Repo\Subclasses\Post_Repo\Tests\Integration\Fixtures\Fixture;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\WordPress\Repo\Subclasses\Post_Repo\Post_Repo
 *
 * @internal
 *
 * @small
 */
final class List_All extends Fixture {
    /**
     * @test
     */
    public function pass(): void {
        self::assertCount(
            expectedCount: 5,
            haystack: Post_Repo::new_instance()->list_all(),
        );
    }
}
