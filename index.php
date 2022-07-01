<?php

function checkNumber($arr)
{
    $oddsCnt = 0;
    foreach ($arr as $item) {
        if ($item % 2 != 0) {
            ++$oddsCnt;
        }
    }

    return [
        'min'     => min($arr),
        'max'     => max($arr),
        'oddsCnt' => $oddsCnt
    ];
}

function checkManualNumber($arr)
{
    $min  = $arr[0];
    $max  = $arr[0];
    $oddsCnt = 0;

    foreach ($arr as $item) {
        if ($item < $min) {
            $min = $item;
        }
        if($item > $max) {
            $max = $item;
        }

        if ($item % 2 != 0) {
            ++$oddsCnt;
        }
    }

    return [
        'min'     => $min,
        'max'     => $max,
        'oddsCnt' => $oddsCnt
    ];
}

$array = [10,21,12,45,7,2];

$check  = checkNumber($array);
$check1 = checkManualNumber($array);
echo "<pre>";
print_r($check);
print_r($check1);
echo "</pre>";
