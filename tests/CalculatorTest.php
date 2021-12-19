<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Logger\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function itCanSum()
    {
        $calculator = new Calculator();
        $result = $calculator->sum(4, 5);

        $this->assertEquals(
            9,
            9,
            "actual value is not equals to expected"
        );
    }
}
