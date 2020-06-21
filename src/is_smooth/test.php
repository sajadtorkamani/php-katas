<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class IsSmoothTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertTrue(is_smooth([7, 2, 2, 5, 10, 7]));
        $this->assertTrue(is_smooth([-12, 34, 40, -5, -12, 4, 0, 0, -12]));
        $this->assertFalse(is_smooth([-5, -5, 10]));
        $this->assertFalse(is_smooth([4, 2]));
        $this->assertFalse(is_smooth([45, 23, 12, 33, 12, 453, -234, -45]));
        $this->assertFalse(is_smooth([9, 0, 15, 9]));
        $this->assertFalse(is_smooth([-6, 6, -6]));
        $this->assertFalse(is_smooth([26, 26, -17]));
        $this->assertFalse(is_smooth([-7, 5, 5, 10]));
        $this->assertFalse(is_smooth([3, 4, 5]));
        $this->assertFalse(is_smooth([-5, 3, -1, 9]));
    }
}
