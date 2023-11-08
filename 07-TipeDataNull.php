<?php

$name = "Fairuz";
$name = null;

$age = 18;

echo $name;
echo is_null($name);
echo "\n";
echo $age;
echo "\n";

var_dump(is_null($name));
echo "\n";

$contoh = "Ulum";
unset($contoh);
var_dump(isset($contoh));