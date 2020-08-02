<?php

use PHPUnit\Framework\TestCase;

require_once 'solution.php';

class SeaSickTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals('Throw Up', sea_sick('_~~~~~~~_~__~______~~__~~_~~'));
        $this->assertEquals('Throw Up', sea_sick('______~___~_'));
        $this->assertEquals('No Problem', sea_sick('~'));
    }
}
