<?php
/**
 * Created by PhpStorm.
 * User: Alessandro Battaglia
 * Date: 05/10/2018
 * Time: 09:39
 *
 * Multiplication table
 */

const ROWS = 10;
const COLS = 10;

for ($r=1; $r<=ROWS; $r++) {
    for ($c=1; $c<=COLS; $c++)
        echo '| ' . format($r*$c) . ' ';

    echo "|\n";
}

/**
 * Format for nobs
 *
 * @param $number
 * @param int $min
 * @param string $space
 * @return string
 */
function easyFormat($number) {
    if($number<10)
        return '  ' . $number;
    elseif($number<100)
        return ' ' . $number;
    elseif($number<1000)
        return $number;
}

/**
 * Format for skilled
 *
 * @param $number
 * @param int $min
 * @param string $space
 * @return string
 */
function format($number, $min = 3, $space = ' ') {
    $digits = strlen((string)$number);

    $result = [];

    for($i=$digits; $i<$min; $i++)
        $result[] = $space;

    return join('', $result) . $number;
}