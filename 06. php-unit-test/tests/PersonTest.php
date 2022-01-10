<?php

namespace Badriysha\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;

    protected function setUp(): void
    {
        // $this->person = new Person("Yusron");
    }

    /**
     * Cara Fixer Annotation
     * @before
     */
    public function setPerson(): void
    {
        $this->person = new Person("Yusron");
    }

    public function testSucces() {
        self::assertEquals('Hello Budi, my name is Yusron', $this->person->sayHello("Budi"));
    }

    public function testException() {
        self::expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodbyeSuccess()
    {
        self::expectOutputString('Good bye Badri' . PHP_EOL);
        $this->person->sayGoodBye("Badri");
    }
}