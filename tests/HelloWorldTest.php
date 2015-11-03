<?php

namespace DinoLai\HelloWorld;

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{

    public function testSayHello()
    {

        $helloWorld = new HelloWorld;

        $this->assertSame('Hello World', $helloWorld->sayHello());
    }
}