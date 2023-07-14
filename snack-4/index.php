<?php
function SubArray($array, $a, $b)
{
    for ($i = $a; $i < $b - 1; $i++) {
        $newArray[] = $array[$i];
    }
    var_dump($newArray);
}

$element = [1, 2, 3, 4, 45, 46, 47, 48, 49, 10];
SubArray($element, 1, 5);
