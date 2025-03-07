<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_basic_test(): void
    {
        $a = 1;
        $c = rand(1, 10);
        $this->assertTrue($a < $c);
    }
}