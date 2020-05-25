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
        $this->assertEquals(9, sum_of_minimums([
                [7, 9, 8, 6, 2],
                [6, 3, 5, 4, 3],
                [5, 8, 7, 4, 5]])
        );

        $this->assertEquals(76, sum_of_minimums([
            [11, 12, 14, 54],
            [67, 89, 90, 56],
            [7, 9, 4, 3],
            [9, 8, 6, 7]
        ]));
    }
}
