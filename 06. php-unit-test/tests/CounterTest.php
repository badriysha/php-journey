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

    public function testIncomplete()
    {
        self::assertEquals(0, $this->counter->getCounter());
        self::markTestIncomplete("Test is not completed");
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
        // cara skip test
        self::markTestSkipped("Ada error yang belum selesai");

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

    /**
     * @requires OSFAMILY Windows
     */
    public function testOnlyInWindows()
    {
        self::assertTrue(true, "Hanya untuk Windows");
    }

    /**
     * @requires PHP >= 8
     * @requires OSFAMILY Darwin
     */
    public function testOnlyMacAndPHP8()
    {
        self::assertTrue(true, "Hanya untuk Mac OS dan PHP 8");
    }


}