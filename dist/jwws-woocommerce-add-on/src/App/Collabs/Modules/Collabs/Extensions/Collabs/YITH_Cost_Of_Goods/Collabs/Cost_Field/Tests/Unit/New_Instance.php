<?php declare(strict_types=1);

namespace JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods\Collabs\Cost_Field\Tests\Unit;

use JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods\Collabs\Cost_Field\Cost_Field;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\App\Collabs\Modules\Collabs\Extensions\Collabs\YITH_Cost_Of_Goods\Collabs\Cost_Field\Cost_Field
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
            expected: Cost_Field::class,
            actual: Cost_Field::new_instance(),
        );
    }
}
