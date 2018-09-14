<?php
$Hari = 40000;
$Makanan = 25000;
$Minuman = 10000;
$Berbelanja = $Makanan + $Minuman;
$Sisa_uang = $Hari - $Berbelanja;

echo "Uang Hari : $Hari<br>";
echo "Makan : $Makanan<br>";
echo "Minum : $Minuman<br>";
echo "Hari menghabiskan uang sebesar : $Berbelanja<br>";
echo "Sisa Uang Hari : $Sisa_uang<br>";

if ($Sisa_uang<=0) {
    echo "Hari <b style=color:red>BOROS</b>";
} else {
    echo "Hari <b style=color:green>HEMAT</b>";
}