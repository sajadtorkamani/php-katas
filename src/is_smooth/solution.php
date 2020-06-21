<?php

function is_smooth(array $nums): bool
{
    $numsCount = count($nums);
    $firstNum = $nums[0];
    $lastNum = end($nums);
    $middleSum = $numsCount % 2 === 0
        ? $middleSum = $nums[($numsCount / 2) - 1] + $nums[$numsCount / 2]
        : $middleSum = $nums[floor($numsCount / 2)];

    return $firstNum === $lastNum && $firstNum === $middleSum;
}
