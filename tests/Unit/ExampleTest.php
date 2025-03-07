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
        $b = 2;
        $c = $a + $b;
        $this->assertTrue($a > 0);
    }
}