<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class AccumTest extends TestCase
{
  /**
   * @test
   */
  public function returns_correct_result()
  {
    $this->assertEquals("A-Bb-Ccc-Dddd", accum("abcd"));
    $this->assertEquals("R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy", accum("RqaEzty"));
    $this->assertEquals("C-Ww-Aaa-Tttt", accum("cwAt"));
  }
}
