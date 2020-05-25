<?php

use PHPUnit\Framework\TestCase;

require_once 'solution.php';

class SolutionTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals(5.75, calculate_total(5, 5, 10));
    }
}
