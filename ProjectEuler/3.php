<?php

/**
 * 5/27/15
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */


$prime        = 2;
$bigNum       = 600851475143;
$largestPrime = 0;


function isEven($prime)
{
    $sum = 0;
    foreach (range(1, $prime) as $num) {
        if ($prime % $num == 0) {
            $sum++;
        }
    }

    if ($sum == 2) {
        return true;
    }
}

while ($prime <= $bigNum) {
    if ($bigNum % $prime == 0) {
        if (isEven($prime)) {
            $largestPrime = $prime;
            $bigNum       = $bigNum / $prime;
        }
    }
    $prime++;
}

echo 'Answer: '.$largestPrime;
