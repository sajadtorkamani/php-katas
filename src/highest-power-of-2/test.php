<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class HighestPowerOfTwoTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals(64, solution(192));
        $this->assertEquals(8, solution(132232));
        $this->assertEquals(64, solution(64));
        $this->assertEquals(1, solution(123));
    }
}

