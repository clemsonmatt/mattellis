<?php

/**
 * 5/28/15
 *
 * A palindromic number reads the same both ways.
 * The largest palindrome made from the product of
 * two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

$largest = 0;

function isPalendrome($product)
{
    $productString = (string)$product;

    $isPalendrome = true;
    $counter      = 0;

    for ($i = strlen($productString)-1; $i > 0; $i--) {
        if ($counter >= $i) {
            break;
        }

        if (substr($productString, $counter, 1) != substr($productString, $i, 1)) {
            $isPalendrome = false;
            break;
        }

        $counter++;
    }

    return $isPalendrome;
}

foreach (range(999, 100) as $num1) {
    foreach (range(999, 100) as $num2) {
        $product = $num1 * $num2;
        if (isPalendrome($product)) {
            if ($product > $largest) {
                $largest = $product;
            }
        }
    }
}

echo 'Largest Palendrome: '.$largest;
