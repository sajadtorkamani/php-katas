<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class SplatOperatorTest extends TestCase
{
    /**
     * @test
     */
    public function sum_all_returns_correct_result()
    {
        $this->assertEquals(15, sum_all(1, 2, 3, 4, 5));
        $this->assertEquals(953, sum_all(13, 938, 2));
        $this->assertEquals(11102, sum_all(198, 283, 9826, 2, 4, 789));
    }

    /**
     * @test
     */
    public function ultimate_product_returns_correct_result()
    {
        $this->assertEquals(1, ultimate_product(1));
        $this->assertEquals(366973740, ultimate_product(54, 23, 45, 67, 98));
        $this->assertEquals(3628800, ultimate_product(...array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)));
    }

    /**
     * @test
     */
    public function scale_sum_returns_correct_result()
    {
        $this->assertEquals(70, scale_sum(5, 2, 3, 4, 5));
        $this->assertEquals(13013, scale_sum(13, 68, 5, 798, 56, 65, 9));
        $this->assertEquals(64, scale_sum(4, ...array(4, 4, 4, 4)));
    }
}
