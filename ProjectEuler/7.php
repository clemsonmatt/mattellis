<?php

/**
 *
 */

$count = 0;
$num   = 2;

function checkForPrime($num)
{
    foreach (range(2, ((int)$num/2)) as $num2) {
        if ($num % $num2 != 0 && $num != $num2) {
            return false;
        }
    }

    return true;
}

while ($count < 10001) {
    if (checkForPrime($num)) {
        echo "prime: ".$num;
        $count++;
    }
    $num++;
}

echo $num;
