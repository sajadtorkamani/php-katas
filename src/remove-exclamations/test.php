<?php

use PHPUnit\Framework\TestCase;

require_once 'solution.php';

class RemoveTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals("Hi", remove("Hi!"));
        $this->assertEquals("Hi Hi", remove("Hi! Hi!"));

        $this->assertEquals("Hi Hi!", remove("Hi! Hi"));

        $this->assertEquals("Hi Hi! Hi!!", remove("Hi! Hi Hi!!"));
        $this->assertEquals("!Hi !Hi! !Hi!!", remove("!Hi! !Hi !Hi!!"));
    }
}
