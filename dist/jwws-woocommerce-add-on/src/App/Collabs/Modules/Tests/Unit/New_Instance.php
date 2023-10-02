<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules\Tests\Unit;

use JWWS\WCA\App\Collabs\Modules\Modules;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\App\Collabs\Modules\Modules
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
            expected: Modules::class,
            actual: Modules::new_instance(),
        );
    }
}
