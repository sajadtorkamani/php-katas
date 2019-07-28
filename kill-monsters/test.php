<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class SolutionTest extends TestCase {
  /**
   * @test
   */
  public function works_correctly() {
    $this->assertEquals("hits: 2, damage: 20, health: 30", killMonsters(50, 7, 10));
    $this->assertEquals("hits: 0, damage: 0, health: 20", killMonsters(20, 1, 10));
    $this->assertEquals("hero died", killMonsters(30, 4, 50));
  }
}
