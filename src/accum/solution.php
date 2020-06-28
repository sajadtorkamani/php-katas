<?php

function accum(string $str): string
{
  $chars = str_split($str);
  $index = 0;

  $items = array_map(function ($char) use (&$index) {
    $index += 1;
    return strtoupper($char) . strtolower(str_repeat($char, $index - 1));
  }, $chars);

  return join('-', $items);
}
