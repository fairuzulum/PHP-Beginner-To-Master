<?php

$names = ['Ahmad','Fairuz','Ulumuddin'];
var_dump($names);

// Mengakses Array
var_dump($names[1]);

// Mengubah isi Array
$names[1] = 'Budi';
var_dump($names);

// Menambah isi Array
$names[] = "Muhammad";
var_dump($names);

// Menghapus isi Array
unset($names[0]);
var_dump($names);

// Menghitung Array
var_dump(count($names));



// Membuat Map
$fairuz = [
    "id" => "01",
    "name" => "Ahmad Fairuz Ulumuddin",
    "age" => 19,
];
var_dump($fairuz);
var_dump($fairuz["name"]);

// Array dalam Array
$ulum = [
    "id" => "02",
    "name" => "Fairuz Ulum",
    "age" => 19,
    "address" => [
        "city" => "Bekasi",
        "country" => "Indonesia"
    ]
];

var_dump($ulum['address']['city']);