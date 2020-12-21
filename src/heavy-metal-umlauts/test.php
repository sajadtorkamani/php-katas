<?php

use PHPUnit\Framework\TestCase;

require 'solution.php';

class HeavyMetalUmlautsTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        $this->assertEquals("Ännöüncïng thë Mäcböök Äïr Güïtär", heavyMetalUmlauts("Announcing the Macbook Air Guitar"));
        $this->assertEquals("Fäcëböök ïntrödücës nëw hëävÿ mëtäl rëäctïön büttöns", heavyMetalUmlauts("Facebook introduces new heavy metal reaction buttons"));
        $this->assertEquals("Ströng sälës öf Gööglë's VR Mëtälhëädsëts sënd tëch stöck prïcës söärïng", heavyMetalUmlauts("Strong sales of Google's VR Metalheadsets send tech stock prices soaring"));
        $this->assertEquals("Vëgän Bläck Mëtäl Chëf hïts thë bïg tïmë ön Ämäzön TV", heavyMetalUmlauts("Vegan Black Metal Chef hits the big time on Amazon TV"));
    }
}

