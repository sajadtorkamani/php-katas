<?php

function getCount(string $str): int {
  return preg_match_all('/[aeiou]/i', $str);
}
