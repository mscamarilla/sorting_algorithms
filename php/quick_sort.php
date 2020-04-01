<?php
//O(n log n)
$array = [];

for ($i = 0; $i <= 10; $i++) {
    $array[] = rand(0, 100);
}

function quickSort($arr, $l = 0, $r = NULL)
{
    static $array = array();

    if ($r == NULL) {
        $array = $arr;
        $r = count($array) - 1;
    }

    $l1 = $l;
    $r1 = $r;

    $x = $array[(($l + $r) >> 1)];

    while ($l1 <= $r1) {
        while ($array[$l1] < $x) {
            $l1++;
        }

        while ($x < $array[$r1]) {
            $r1--;
        }

        if ($l1 <= $r1) {
            list($array[$l1], $array[$r1]) = array($array[$r1], $array[$l1]);

            $l1++;
            $r1--;
        }
    }

    if ($l < $r1) {
        quickSort(NULL, $l, $r1);
    }

    if ($l1 < $r) {
        quickSort(NULL, $l1, $r);
    }

    return $array;
}

print_r($array);
echo '<hr>';
print_r(quickSort($array));
