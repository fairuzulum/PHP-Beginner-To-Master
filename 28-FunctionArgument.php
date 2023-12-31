<?php

function sayHello($firstName,$lastName)
{
    echo "Hello $firstName $lastName";
}
sayHello("Fairuz","Ulum");


// Type Declaration
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total = $first + $last = $total" . PHP_EOL;
}
sum("100","100");
sum(100,100);
sum(true,false);

// Variable Lenght Argument List
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " .implode(",", $values) . "= $total" . PHP_EOL;
}
sumAll(1,2,3,4,5,6);