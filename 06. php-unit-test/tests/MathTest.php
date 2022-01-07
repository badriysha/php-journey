<?php

namespace Badriysha\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase {
    // cara manual
    public function testManual() {
        self::assertEquals(10, Math::sum([5, 5]));
        self::assertEquals(20, Math::sum([4,4,4,4,4]));
        self::assertEquals(9, Math::sum([5,4]));
        self::assertEquals(0, Math::sum([]));
        self::assertEquals(2, Math::sum([2]));
    }

    // cara Data Provider
    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }

    public function mathSumData():array
    {
        return [
          [[5,5], 10],
            [[4,4,4,4,4], 20],
            [[5,4], 9],
            [[], 0],
            [[2], 2]
        ];
    }


    /**
     * @testWith    [[5,5], 10]
     *              [[4,4,4,4,4], 20]
     *              [[4,5], 9]
     *              [[], 0]
     *              [[2], 2]
     */
    public function testWith(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }
}