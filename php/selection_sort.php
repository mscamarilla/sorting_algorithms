<?php
//O(n^2)
$array = [];

for ($i = 0; $i <= 10; $i++) {
    $array[] = rand(0, 100);
}

function selection_sort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $min = 1e9;
        $minIndex = -1;

        for ($j = $i; $j < count($arr); $j++) {
            if ($arr[$j] < $min) {
                $min = $arr[$j];
                $minIndex = $j;
            }
        }

        list($arr[$i], $arr[$minIndex]) = array($arr[$minIndex], $arr[$i]);
    }
    return $arr;
}

print_r($array);
echo '<hr>';
print_r(selection_sort($array));
