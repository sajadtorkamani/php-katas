<?php

require 'solution.php';

use PHPUnit\Framework\TestCase;

class WillYouTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertTrue(will_you(true, false, true));
        $this->assertTrue(will_you(false, false, true));
        $this->assertTrue(will_you(true, true, false));

        $this->assertFalse(will_you(false, false, false));
        $this->assertFalse(will_you(true, true, true));
    }
}
