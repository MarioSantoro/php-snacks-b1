<?php
$array1 = ['a', 'b', 'c', 'd', 'e'];
$array2 = ['1', '2', '3', '4', '5'];

function Arrays($array1, $array2)
{
    for ($i = 0; $i < 10; $i++) {
        $array1[] = $array2[$i + 1];
    }
    var_dump($array1);
}

Arrays($array1, $array2);
