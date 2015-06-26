<?php

/**
 * 5/28/15
 *
 * Smallest Multiple (aka: LCM)
 *
 * 2520 is the smallest number that can be divided
 * by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly
 * divisible by all of the numbers from 1 to 20?
 */

$lastNum = 1;
$primes  = [1,2,3,5,7,11,13,17,19];

function lcm($m, $n)
{
    $r = ($m * $n) / gcd($m, $n);
    return $r;
}

function gcd($a, $b)
{
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

foreach (range(1, 20) as $num) {
    $lastNum = lcm($lastNum, $num);
}

echo 'Smallest: '.$lastNum;
