<?php

use PHPUnit\Framework\TestCase;

require_once 'solution.php';

class MedianTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals(3, median([3, 4, 1, 2, 5]));
        $this->assertEquals(2.5, median([1, 2, 3, 4]));
        $this->assertEquals(41, median([10, 29, 23, 94, 76, 96, 5, 85, 4, 33, 47, 41, 87]));
    }
}
