<?php

function kidoCount($n): array
{
    $nums = [];

    for ($num = 1; $num <= $n; $num++) {
        if ($num % 2 === 1) {
            $nums[] = $num;
        }
    }

    return $nums;
}
