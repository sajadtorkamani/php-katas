<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class KidoCountTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals(kidoCount(20), [1, 3, 5, 7, 9, 11, 13, 15, 17, 19]);
        $this->assertEquals(kidoCount(16), [1, 3, 5, 7, 9, 11, 13, 15]);
        $this->assertEquals(kidoCount(17), [1, 3, 5, 7, 9, 11, 13, 15, 17]);
        $this->assertEquals(kidoCount(1), [1]);
    }
}
