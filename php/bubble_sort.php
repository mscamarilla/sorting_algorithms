<?php
//O(n^2)
$array = [];

for ($i = 0; $i <= 10; $i++) {
    $array[] = rand(0, 100);
}

function bubbleSort($arr)
{
    for ($j = 0; $j < count($arr) - 1; $j++) {
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
            }
        }
    }

    return $arr;
}

print_r($array);
echo '<hr>';
print_r(bubbleSort($array));