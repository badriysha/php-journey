<?php

namespace Badriysha\Test;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase {
    public function testCounter() {
        $counter = new Counter();
        $counter->increment();

        echo $counter->getCounter() . PHP_EOL;
    }

    public function testOther() {
        echo "Hello test" . PHP_EOL;
    }
}