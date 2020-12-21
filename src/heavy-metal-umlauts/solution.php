<?php

function heavyMetalUmlauts(string $boringText): string
{
    $vowels = [
        'A', 'E', 'I', 'O', 'U', 'Y',
        'a', 'e', 'i', 'o', 'u', 'y'
    ];

    $umlauts = [
        'Ä', 'Ë', 'Ï', 'Ö', 'Ü', 'Ÿ',
        'ä', 'ë', 'ï', 'ö', 'ü', 'ÿ'
    ];

    return str_replace($vowels, $umlauts, $boringText);
}

