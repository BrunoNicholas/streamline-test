<?php

/**
 * Checkiing if the work has same characters
 * params @var mixed, @var mixed
 * return @var Boolean
 */
function anagram_checker($str_1, $str_2)
{
    // character instances
    $char_1 = count_chars(strtolower(preg_replace('/\s+/', '', $str_1)), 1);
    $char_2 = count_chars(strtolower(preg_replace('/\s+/', '', $str_1)), 1);
    if ($char_1 == $char_2) {
        return 'yes';
    }
    return 'no';
}
