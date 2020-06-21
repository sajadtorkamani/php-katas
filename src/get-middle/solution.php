<?php

function getMiddle(string $str): string
{
  $length = strlen($str);

  return $length % 2 === 0
    ? substr($str, ($length / 2) - 1, 2)
    : substr($str, ($length - 1) / 2, 1);
}
