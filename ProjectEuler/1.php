<?php

/**
 * 5/27/15
 *
 * If we list all the natural numbers below 10 that are multiples of 3
 * or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */


$sum = 0;

foreach (range(1, 999) as $number) {
    if ($number % 3 == 0) {
        $sum += $number;
    } elseif ($number % 5 == 0) {
        $sum += $number;
    }
}

echo 'Answer: '.$sum;
