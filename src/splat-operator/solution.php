<?php

function sum_all(...$nums): int
{
    return array_sum($nums);
}

function ultimate_product(...$nums): int
{
    return array_product($nums);
}

function scale_sum($firstNum, ...$otherNums): int
{
    return $firstNum * array_sum($otherNums);
}
