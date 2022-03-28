<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class FindSquaresTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals('25-16', findSquares(9));
        $this->assertEquals('9-4', findSquares(5));
    }
}
