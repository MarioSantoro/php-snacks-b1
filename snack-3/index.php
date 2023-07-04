<?php
$array1 = ['a', 'b', 'c', 'd', 'e'];
$array2 = ['1', '2', '3', '4', '5'];
$array4 = [];

function Arrays($array1, $array2)
{
    for ($i = 0; $i < 5; $i++) {
        $array3[] = $array1[$i] . $array2[$i];
    }
    var_dump($array3);
}

Arrays($array1, $array2);
