<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}
function bar()
{
    echo "BAR" . PHP_EOL;
}
$callFunctionFoo = "foo";
$callFunctionBar = 'bar';
$callFunctionFoo();
$callFunctionBar();


function sayHello($name, $filter)
{
    $finalName = $filter($name);
    echo "Hallo $finalName" . PHP_EOL;
}

sayHello("Fairuz","strtoupper");
sayHello("Fairuz", "strtolower");