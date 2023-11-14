<?php

function sum(int $first, int $second) : int
{
    $total = $first + $second;
    return $total;
}

$result = sum(10,10);
var_dump($result);


function getFinalValue(int $value): string
{
    if ($value > 90) {
        return "A";
    } elseif ($value > 80) {
        return "B";
    } elseif ($value > 70) {
        return "C";
    } else {
        return "D";
    }

    echo "UPS" . PHP_EOL;
}
$score = getFinalValue(95);
var_dump($score);
