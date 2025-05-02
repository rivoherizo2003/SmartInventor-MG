<?php

namespace Tests\Unit;

use App\Helpers\SumNumber;
use PHPUnit\Framework\TestCase;

class SumNumberTest extends TestCase
{
    public function testSumNumberShouldSucceed(): void
    {
        $sumNumber = new SumNumber();

        $this->assertEquals(4, $sumNumber->add(2, 2));
    }
}
