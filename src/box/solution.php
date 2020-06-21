<?php

function box(int $n): array
{
    $result = [];

    for ($row = 1; $row <= $n; $row++) {
        $isFirstOrLast = $row === 1 || $row === $n;

        $value = $isFirstOrLast ? str_repeat('-', $n) : '-' . str_repeat(' ', $n - 2) . '-';

        $result[] = $value;
    }

    return $result;
}
