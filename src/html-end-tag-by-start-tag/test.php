<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class HtmlEndTagByStartTagTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals("</button>", html_end_tag_by_start_tag("<button type='button' disabled>"));
        $this->assertEquals("</i>", html_end_tag_by_start_tag("<i>"));
        $this->assertEquals("</div>", html_end_tag_by_start_tag("<div id='my_area' class='data' title='This is a test for title on Div tag'>"));
    }
}
