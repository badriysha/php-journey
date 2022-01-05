<?php

namespace Badriysha\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase {
    public function testCounter() {
        $counter = new Counter();
        // cara 1
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
        // cara 2
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
        // cara 3
        $counter->increment();
        self::assertEquals(3, $counter->getCounter());
    }

    /**
     * @test
     */
    public function increment() {
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
    }

    public function testFirst() :Counter
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());

        return $counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter) :void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }
}