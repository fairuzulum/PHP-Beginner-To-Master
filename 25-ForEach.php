<?php

$names = ["Ahmad", "Fairuz", "Ulumuddin"];
foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

$person = [
    "first_name" => "Ahmad",
    "middle_name" => "Fairuz",
    "last_name" => "Ulumuddin"
];

foreach ($person as $data => $value){
    echo "Hello $data : $value" . PHP_EOL;
}