<?php

namespace Badriysha\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSucces() {
        $person = new Person("Yusron");
        self::assertEquals('Hello Budi, my name is Yusron', $person->sayHello("Budi"));
    }

    public function testException() {
        $person = new Person("Badri");
        self::expectException(\Exception::class);
        $person->sayHello(null);
    }
}