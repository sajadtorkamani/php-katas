<?php

function findSquares(int $n): string
{
    for ($num = 1; $num < 1000000; $num++) {
        $nextNum = $num + 1;
        $numsSum = $num + $nextNum;

        if ($numsSum === $n) {
            return $nextNum * $nextNum . '-' . $num * $num;
        }
    }

    throw new Exception("Shouldn't get here.");
}