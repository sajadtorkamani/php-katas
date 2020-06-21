<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class BoxTest extends TestCase {
    /**
     * @test
     */
    public function returns_correct_result() {
        $this->assertEquals(["-----", "-   -", "-   -", "-   -", "-----"], box(5));
        $this->assertEquals(["---", "- -", "---"], box(3));
    }
}
