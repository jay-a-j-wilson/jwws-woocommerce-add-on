<?php declare(strict_types=1);

namespace JWWS\WCA\App\Factory\Tests\Unit;

use JWWS\WCA\App\Factory\Factory;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\App\Factory\Factory
 *
 * @internal
 */
final class New_Instance extends TestCase {
    /**
     * @test
     */
    public function pass(): void {
        self::assertInstanceOf(
            expected: Factory::class,
            actual: Factory::new_instance(),
        );
    }
}
