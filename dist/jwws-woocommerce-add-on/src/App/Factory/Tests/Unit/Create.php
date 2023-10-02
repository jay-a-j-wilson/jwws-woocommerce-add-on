<?php declare(strict_types=1);

namespace JWWS\WCA\App\Factory\Tests\Unit;

use JWWS\WCA\App\Factory\Factory;
use PHPUnit\Framework\TestCase;
use JWWS\WCA\App\App;

/**
 * @covers \JWWS\WCA\App\Factory\Factory
 *
 * @internal
 */
final class Create extends TestCase {
    /**
     * @test
     */
    public function pass(): void {
        self::assertInstanceOf(
            expected: App::class,
            actual: Factory::new_instance()->create(),
        );
    }
}
