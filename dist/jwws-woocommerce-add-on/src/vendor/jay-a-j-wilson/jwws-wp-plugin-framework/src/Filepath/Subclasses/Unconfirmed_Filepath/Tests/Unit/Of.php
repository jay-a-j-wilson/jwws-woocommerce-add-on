<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Filepath\Subclasses\Unconfirmed_Filepath\Tests\Unit;

use JWWS\WCA\Deps\JWWS\WPPF\Filepath\Sub_Value_Objects\Dir\Dir;
use JWWS\WCA\Deps\JWWS\WPPF\Filepath\Sub_Value_Objects\File\File;
use JWWS\WCA\Deps\JWWS\WPPF\Filepath\Subclasses\Unconfirmed_Filepath\Unconfirmed_Filepath;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\Filepath\Subclasses\Unconfirmed_Filepath\Unconfirmed_Filepath
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
            expected: Unconfirmed_Filepath::class,
            actual: Unconfirmed_Filepath::of(
                dir: self::createStub(originalClassName: Dir::class),
                file: self::createStub(originalClassName: File::class),
            ),
        );
    }
}
