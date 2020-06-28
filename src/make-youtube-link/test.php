<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class MakeYouTubeLinkTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals('https://www.youtube.com/embed/L3JxAuUyjzY', makeYoutubeLink('https://www.youtube.com/watch?v=L3JxAuUyjzY'));
        $this->assertEquals('https://www.youtube.com/embed/L3JxAuUyjzY', makeYoutubeLink('https://www.youtube.com/embed/L3JxAuUyjzY'));
    }

    /**
     * @test
     */
    public function getVideoId_returns_correct_result()
    {
        $this->assertEquals('foobar', getYoutubeVideoIdFromUrl('https://www.youtube.com/watch?v=foobar'));
        $this->assertEquals('foobar', getYoutubeVideoIdFromUrl('http://www.youtube.com/watch?v=foobar'));
        $this->assertEquals('foobar', getYoutubeVideoIdFromUrl('https://youtu.be/foobar'));
        $this->assertEquals('foobar', getYoutubeVideoIdFromUrl('https://www.youtube.com/embed/foobar'));
        $this->assertEquals('foobar', getYoutubeVideoIdFromUrl('youtube.de/watch?i=foobar'));
    }
}
