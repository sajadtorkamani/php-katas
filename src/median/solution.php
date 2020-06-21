<?php

function median(array $nums): float
{
    sort($nums);
    $count = count($nums);

    return $count % 2 === 1
        ? $nums[floor($count / 2)]
        : ($nums[($count / 2) - 1] + $nums[$count / 2]) / 2;
}
