<?php
/**
 * Created by PhpStorm.
 * User: Alessandro Battaglia
 * Date: 05/10/2018
 * Time: 16:57
 */

$array = [3, 7, 6, 9, 1, 'a', 5, 'p'];

print_r(reverse($array));

/**
 * Reverse the array for all
 *
 * @param $array
 * @return array
 */
function reverse($array) {
    $result = [];
    for ($i=count($array)-1; $i>=0; $i--)
        $result[] = $array[$i];

    return $result;
}