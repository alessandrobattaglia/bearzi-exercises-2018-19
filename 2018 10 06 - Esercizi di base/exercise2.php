<?php
/**
 * Created by PhpStorm.
 * User: Alessandro Battaglia
 * Date: 05/10/2018
 * Time: 10:06
 */

const OCCURRENCES = 100;

$primes = [];

$count = $i = 1;
while ($count < OCCURRENCES) {
    if(isPrime($i)) {
        $primes[] = $i;
        $count++;
    }
    $i++;
}

echo join(' ', $primes);

/**
 * @param $num
 * @return bool
 */
function isPrime($num) {
    $i = 2;
    $continue = true;
    while($i < sqrt($num) && $continue) {
        $continue = $num % $i != 0; // If not divisible --> set continue to true, else --> stop the loop

        $i++;
    }

    return $continue;
}