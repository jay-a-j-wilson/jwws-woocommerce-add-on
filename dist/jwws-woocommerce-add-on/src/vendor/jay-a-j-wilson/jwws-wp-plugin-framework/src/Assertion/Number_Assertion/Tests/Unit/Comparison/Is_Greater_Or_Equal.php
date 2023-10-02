<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Assertion\Number_Assertion\Tests\Unit\Comparison;

use JWWS\WCA\Deps\JWWS\WPPF\Assertion\Number_Assertion\Number_Assertion;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JWWS\WCA\Deps\JWWS\WPPF\Assertion\Number_Assertion\Number_Assertion
 *
 * @internal
 *
 * @small
 */
final class Is_Greater_Or_Equal extends TestCase {
    /**
     * @test
     *
     * @dataProvider \JWWS\WCA\Deps\JWWS\WPPF\Assertion\Number_Assertion\Tests\Unit\Comparison\Data_Provider::is_greater
     * @dataProvider \JWWS\WCA\Deps\JWWS\WPPF\Assertion\Number_Assertion\Tests\Unit\Comparison\Data_Provider::is_equal
     *
     * @testdox pass[$_dataName] => $arg_2 greater than $arg_1
     */
    public function pass(int|float $arg_1, int|float $arg_2): void {
        $this->expectNotToPerformAssertions();
        Number_Assertion::of(number: $arg_1)->is_greater_or_equal(min: $arg_2);
    }

    /**
     * @test
     *
     * @dataProvider \JWWS\WCA\Deps\JWWS\WPPF\Assertion\Number_Assertion\Tests\Unit\Comparison\Data_Provider::is_less
     *
     * @testdox throw[$_dataName] => $arg_2 not greater than $arg_1
     */
    public function throw(int|float $arg_1, int|float $arg_2): void {
        $this->expectException(exception: \InvalidArgumentException::class);
        Number_Assertion::of(number: $arg_1)->is_greater_or_equal(min: $arg_2);
    }
}
