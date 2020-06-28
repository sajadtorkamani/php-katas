<?php

function solution(int $n): int
{
    $candidates = [];

    for ($num = 1; $num <= $n; $num++) {
        if ($n % $num === 0 && isPowerOfTwo($num)) {
            $candidates[] = $num;
        }
    }

    return max($candidates);
}

function isPowerOfTwo(int $num): bool
{
    return ($num & ($num - 1)) == 0;
}
