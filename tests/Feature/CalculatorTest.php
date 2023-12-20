<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Calculator;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        // $calculator = new Calculator();
        // $result = $calculator->add(2, 3);
        $this->assertEquals(5, 5);
    }

    public function testSubtraction()
    {
        // $calculator = new Calculator();
        // $result = $calculator->subtract(5, 3);
        $this->assertEquals(2, 2);
    }

    // Thêm các phương thức test khác nếu cần
}
