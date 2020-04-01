<?php

//O(n)
$array = [];

for ($i = 0; $i <= 10; $i++) {
    $array[] = rand(0, 100);
}

function count_sort($arr)
{

    //нужно знать самое большое число в массиве
    $MAXN = max($arr);

    //создаем массив на 1 больше самого большого числа и заполняем его нулями
    for ($c = 0; $c <= $MAXN + 1; $c++) {
        $count[] = 0;
    }

    for ($i = 0; $i < count($arr); $i++) {
        $count[$arr[$i]]++;
    }

    $index = 0;
    for ($i = 0; $i <= $MAXN; $i++) {
        if ($count[$i]) {
            $k = $count[$i];
            while ($k-- > 0) $arr[$index++] = $i;
        }
    }

    return $arr;
}


print_r($array);
echo '<hr>';
print_r(count_sort($array));
