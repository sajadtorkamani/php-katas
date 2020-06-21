<?php

function calculate_total(float $subtotal, float $tax, float $tip): float
{
    $multiplier = 1 + (($tax + $tip) / 100);
    $total = $subtotal * $multiplier;

    return round($total, 2);
}
