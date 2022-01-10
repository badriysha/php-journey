<?php

namespace Badriysha\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase {
    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Set up Counter" . PHP_EOL;
    }

    public function testCounter() {
        // cara 1
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
        // cara 2
        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCounter());
        // cara 3
        $this->counter->increment();
        self::assertEquals(3, $this->counter->getCounter());
    }

    /**
     * @test
     */
    public function increment() {
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst() :Counter
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter) :void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    protected function tearDown(): void
    {
        echo "Tear Down" . PHP_EOL;
    }

    /**
     * @after
     */
    public static function tearDownAfterClass(): void
    {
        echo "after" . PHP_EOL;
    }
}