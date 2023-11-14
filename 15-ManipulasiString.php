<?php

// Dot Operator
$name = "Ahmad Fairuz Ulumuddin";
echo "Nama saya : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;


// Konversi Ke Number dan Sebaliknya
$valueString = (string)100;
var_dump($valueString);
$valueInteger = (integer)"100";
var_dump($valueInteger);


// Mengakses Karakter
$name = "Fairuz";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

// Variable Parsing
echo "Hello $name, Selamat Belajar PHP" .PHP_EOL;

// Curly Brace
$var = "var";
echo "this is {$var}s";