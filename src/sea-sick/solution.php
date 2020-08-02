<?php

function sea_sick(string $str): string
{
    preg_match_all('/_~/', $str, $calmToWaveMatches);
    preg_match_all('/~_/', $str, $waveToCalmMatches);

    $numChanges = count($calmToWaveMatches[0]) + count($waveToCalmMatches[0]);

    return ($numChanges / strlen($str) > 0.20) ? 'Throw Up' : 'No Problem';
}
