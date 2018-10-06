<?php
/**
 * Created by PhpStorm.
 * User: Alessandro Battaglia
 * Date: 05/10/2018
 * Time: 10:06
 */

// isPrimeFast: 0.0095019340515137
// isPrime:     0.020090818405151

$start = microtime(true);

const OCCURRENCES = 1000;

$primes = [];

$count = $i = 2;
while ($count < OCCURRENCES) {
    if(isPrimeFast($i, $primes)) {
        $primes[] = $i;
        $count++;
    }
    $i++;
}

$end = microtime(true);

echo 'Time: ' . ($end - $start) . "\n";

echo join("\n", $primes);

/**
 * Check if a number is prime for skilled
 *
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

/**
 * Check if a number is prime for faster
 *
 * @param int $num
 * @param array $primes
 * @return bool
 */
function isPrimeFast($num, $primes) {
    foreach ($primes as $prime) {
        if($num % $prime == 0) {
            return false;
        }

        if($prime > sqrt($num)) {
            return true;
        }
    }

    return true;
}

/**
 * Check if a number id prime for nobs
 *
 * @param $num
 * @return bool
 */
function easyIsPrime($num) {
    for ($i=2; $i<$num; $i++)
        if($num%$i===0)
            return false;

    return true;
}