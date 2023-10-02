<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules\Collabs\Core\Tests\Unit;

use JWWS\WCA\App\Collabs\Modules\Collabs\Core\Core;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\App\Collabs\Modules\Collabs\Core\Core
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
            expected: Core::class,
            actual: Core::new_instance(),
        );
    }
}
