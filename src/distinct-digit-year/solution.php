<?php

function distinctDigitYear($year)
{
    while (true) {
        $year += 1;

        if (isDistinctDigitYear($year)) {
            return $year;
        }
    }
}

function isDistinctDigitYear(int $year): bool
{
    $allDigits = str_split($year);
    $uniqueDigits = array_unique($allDigits);

    return count($allDigits) === count($uniqueDigits);
}

