<?php
/**
 * Created by PhpStorm.
 * User: Alessandro Battaglia
 * Date: 05/10/2018
 * Time: 16:40
 */

const OCCURRENCES = 10;

for ($i=0;$i<OCCURRENCES; $i++)
    echo $i . ': ' .fibonacci($i) . "\n";

/**
 * Find the $n number of the Fibonacci series for normal people
 *
 * @param $n
 * @return int
 */
function fibonacci($n) {
    if($n<=1)
        return 1;
    else
        return fibonacci($n-1) + fibonacci($n-2);
}

/**
 * Find the $n number of the Fibonacci series for crazy people
 *
 * @param $n
 * @return int
 */
function proFibonacci($n) {
    return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
}