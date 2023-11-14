<?php

$first = [
    "first_name" => "Fairuz"
];

$last = [
    "last_name" => "Ulum"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Fairuz",
    "last_name" => "Ulum"
];

$b = [
    "last_name" => "Ulum",
    "first_name" => "Fairuz"
];

var_dump($a == $b);
var_dump($a === $b);