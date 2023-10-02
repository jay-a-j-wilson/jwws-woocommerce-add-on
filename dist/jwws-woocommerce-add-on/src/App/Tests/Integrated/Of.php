<?php declare(strict_types=1);

namespace JWWS\WCA\App\Tests\Integrated;

use JWWS\WCA\App\App;
use JWWS\WCA\Deps\JWWS\WPPF\Loader\Loader;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\App\App
 *
 * @internal
 *
 * @small
 */
final class Of extends TestCase {
    /**
     * @test
     */
    public function pass(): void {
        self::assertInstanceOf(
            expected: App::class,
            actual: App::of(
                loader: $this->createStub(originalClassName: Loader::class)
            ),
        );
    }
}
