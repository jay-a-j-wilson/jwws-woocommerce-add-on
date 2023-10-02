<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Tests\Unit;

use JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Extensions;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Extensions
 *
 * @internal
 *
 * @small
 */
final class New_Instance extends TestCase {
    /**
     * @test
     */
    public function pass(): void {
        self::assertInstanceOf(
            expected: Extensions::class,
            actual: Extensions::new_instance(),
        );
    }
}
