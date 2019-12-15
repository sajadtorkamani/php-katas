<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class SolutionTest extends TestCase {
  /**
   * @test
   */
  public function returns_correct_middle_chars() {
    $this->assertEquals("es", getMiddle("test"));
    $this->assertEquals("dd", getMiddle("middle"));

    $this->assertEquals("t", getMiddle("testing"));
    $this->assertEquals("A", getMiddle("A"));
  }
}
