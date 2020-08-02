<?php

use PHPUnit\Framework\TestCase;

require_once 'solution.php';

class ValidNameTest extends TestCase
{
    /**
     * @test
     */
    public function returns_correct_result()
    {
        // Compatible
        $this->assertEquals('Congratulations, your baby names are compatible!', valid_name(['Cruz', 'Zuma']),);
        $this->assertEquals('Congratulations, your baby names are compatible!', valid_name(['Buddy Bear', 'Romeo', 'Olive']));
        $this->assertEquals(
            'Congratulations, your baby names are compatible!',
            valid_name(['Peaches', 'Saint', 'Theodora', 'Ava', 'Apple', 'Egypt', 'Tallulah', 'Harlow', 'Willow', 'Weston', 'Nala', 'Atlas', 'Silas', 'Sundance', 'Esmeralda', 'Angel', 'Lily-Rose', 'Ever', 'Rebel', 'Lourdes'])
        );

        // Not compatible
        $this->assertEquals('Back to the drawing board, your baby names are not compatible.', valid_name(['George', 'Charlotte']));

        // One name
        $this->assertEquals(
            'Congratulations, you can choose any name you like!',
            valid_name(['Jaden']),
        );

        // No names
        $this->assertEquals( 'You must test at least one name.', valid_name([]) );
    }
}

