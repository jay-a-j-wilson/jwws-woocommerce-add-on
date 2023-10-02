<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods\Tests\Unit;

use JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods\YITH_Cost_Of_Goods;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods\YITH_Cost_Of_Goods
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
            expected: YITH_Cost_Of_Goods::class,
            actual: YITH_Cost_Of_Goods::new_instance(),
        );
    }
}
