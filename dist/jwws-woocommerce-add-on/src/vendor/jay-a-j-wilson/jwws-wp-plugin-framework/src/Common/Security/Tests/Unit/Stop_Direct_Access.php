<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Common\Security\Tests\Unit;

use JWWS\WCA\Deps\JWWS\WPPF\Common\Security\Security;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\Common\Security\Security
 *
 * @internal
 *
 * @small
 */
final class Stop_Direct_Access extends TestCase {
    /**
     * @test
     */
    public function pass(): void {
        // \define(constant_name: 'ABSPATH', value: '/path/to/application');

        $this->expectNotToPerformAssertions();
        Security::stop_direct_access();
    }
}
