<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class GetPercentageTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals("10%", getPercentage(101, 1000));
        $this->assertEquals("51%", getPercentage(256, 500));
        $this->assertEquals("85%", getPercentage(256, 300));
        $this->assertEquals("25%", getPercentage(259));

        $this->assertEquals("No e-mails sent", getPercentage(0));
        $this->assertEquals("Daily limit is reached", getPercentage(1000, 1000));
    }
}
