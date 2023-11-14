<?php

$nilai = 85;

if($nilai > 75){
    echo "Selamat Anda Lulus";
}else{
    echo "Anda Tidak Lulus";
}

echo PHP_EOL;

if($nilai > 80){
    echo "Nilai A";
}elseif ($nilai > 75){
    echo "Nilai B";
}else{
    echo "Nilai E";
}
