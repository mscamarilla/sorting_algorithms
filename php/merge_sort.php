<?php
//O(n log n)

$array = [];

for ($i = 0; $i <= 10; $i++) {
    $array[] = rand(0, 100);
}

function mergeSort($arr)
{
    if (count($arr) == 1) {
        return $arr;
    }

    $mid = count($arr) / 2;
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right)
{
    $result = array();
    $i = 0;
    $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] > $right[$j]) {

            $result[] = $right[$j];
            $j++;
        } else {
            $result[] = $left[$i];
            $i++;
        }
    }
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }
    return $result;
}


print_r($array);
echo '<hr>';
print_r(mergeSort($array));

