<?php
function SubArray($array, $a, $b)
{
    for ($i = $a + 1; $i < $b; $i++) {
        $array[] = $i;
    }
    var_dump($array);
}

$element = [];
SubArray($element, 4, 8);
