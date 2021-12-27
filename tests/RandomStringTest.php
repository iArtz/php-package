<?php

namespace Tests;

use Orchestra\Testbench\TestCase;
use Utils\RandomString;

class RandomStringTest extends TestCase
{
    public function testCanGenerateRandomString()
    {
        $randomString = new RandomString(6);
        $string = $randomString->generate();
        $this->assertInstanceOf(RandomString::class, $randomString);
        $this->assertEquals(6, strlen($string));
    }
}
