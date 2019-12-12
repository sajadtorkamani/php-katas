<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class SolutionTest extends TestCase {
  /**
   * @test
   */
  public function returns_correct_result() {
    $this->assertEquals(2, getCount('hello'));
    $this->assertEquals(2, getCount('hEllO'));
    $this->assertEquals(5, getCount("abracadabra"));
  }
}
