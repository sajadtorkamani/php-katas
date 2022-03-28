<?php

function chuckPantsPrice(mixed $initialPrice, string $soil, int $age): string
{
    $finalPrice = $initialPrice;

    for ($year = 1; $year <= $age; $year++) {
        switch ($soil) {
            case 'Barely used':
                $finalPrice = $finalPrice * ((100 + 10) / 100);
                break;
            case 'Seen a few high kicks':
                $finalPrice = $finalPrice * ((100 + 25) / 100);
                break;
            case 'Blood stained':
                $finalPrice = $finalPrice * ((100 + 30) / 100);
                break;
            case 'Heavily soiled':
                $finalPrice = $finalPrice * ((100 + 50) / 100);
                break;
            default:
                return 'Chuck is bottomless!';
        }
    }

    return '$' . number_format($finalPrice, 2, '.', false);
}