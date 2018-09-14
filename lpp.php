<?php
function hasil($panjang, $lebar){
    return $panjang * $lebar;
}
$p = 10;
$l = 20;
echo "Panjang = $p<br> Lebar = $l<br> Rumus = panjang * lebar<br> Luas Persegi Panjang = ";
echo hasil($p,$l);