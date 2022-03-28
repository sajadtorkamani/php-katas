<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class ChuckPantsPriceTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals('$26.55', chuckPantsPrice(19.95, 'Barely used', 3));
        $this->assertEquals('$788.99', chuckPantsPrice(27.76, 'Seen a few high kicks', 15));
        $this->assertEquals('$9356.80', chuckPantsPrice(13.26, 'Blood stained', 25));
        $this->assertEquals('$753.66', chuckPantsPrice(44.11, 'Heavily soiled', 7));
        $this->assertEquals('Chuck is bottomless!', chuckPantsPrice('pants', 6, 7));
    }
}
