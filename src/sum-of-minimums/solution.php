<?php

function sum_of_minimums($numsArray): int
{
    return array_reduce($numsArray, function ($sum, $nums) {
        return $sum + min($nums);
    }, 0);
}
