<?php

function getPercentage(int $numSent, int $totalLimit = 1000): string
{
    if ($numSent === 0) {
        return 'No e-mails sent';
    }

    if ($numSent >= $totalLimit) {
        return 'Daily limit is reached';
    }

    return (int)(($numSent / $totalLimit) * 100) . '%';
}

