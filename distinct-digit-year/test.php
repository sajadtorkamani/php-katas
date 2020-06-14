<?php

use PHPUnit\Framework\TestCase;

require_once 'solution.php';

class SolutionTest extends TestCase
{
    /**
     * @test
     */
    public function distinctDigitYear_returns_correct_result()
    {
        $this->assertEquals(1023, distinctDigitYear(1001));
        $this->assertEquals(1203, distinctDigitYear(1123));
        $this->assertEquals(2013, distinctDigitYear(2001));
        $this->assertEquals(2340, distinctDigitYear(2334));
        $this->assertEquals(3401, distinctDigitYear(3331));
        $this->assertEquals(2013, distinctDigitYear(1987));
        $this->assertEquals(5601, distinctDigitYear(5555));
        $this->assertEquals(7801, distinctDigitYear(7712));
        $this->assertEquals(8091, distinctDigitYear(8088));
        $this->assertEquals(9012, distinctDigitYear(8999));
    }

    /**
     * @test
     */
    public function isDistinctDigitYear_returns_correct_result()
    {
        $this->assertFalse(isDistinctDigitYear(2000));
        $this->assertFalse(isDistinctDigitYear(2010));
        $this->assertFalse(isDistinctDigitYear(2020));

        $this->assertTrue(isDistinctDigitYear(1023));
        $this->assertTrue(isDistinctDigitYear(1203));
        $this->assertTrue(isDistinctDigitYear(2013));
    }
}
