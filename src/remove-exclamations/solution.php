<?php

function remove(string $str): string
{
    $words = explode(' ', $str);

    $transformedWords = array_map(function (string $word) {
        // If multiple exclamations at the end, don't do anything
        if (preg_match('/!{2,}$/', $word)) {
            return $word;
        }

        return $word[-1] === '!'
            ? substr($word, 0, strlen($word) - 1)
            : $word . '!';
    }, $words);

    return implode(' ', $transformedWords);
}
