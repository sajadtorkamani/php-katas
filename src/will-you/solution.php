<?php

function will_you(bool $isYoung, bool $isBeautiful, bool $isLoved): bool
{
    return ((!$isYoung || !$isBeautiful) && $isLoved)
        || ($isYoung && $isBeautiful && !$isLoved);
}
