<?php

function countWins(array $winnersList, string $country): int {
    $countryWinners = array_filter($winnersList, function($winner) use ($country) {
       return $winner['country'] === $country;
    });

    return count($countryWinners);
}
