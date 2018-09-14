<?php
function tambah_string ($str) {
    $str = $str . ", Jakarta";
    return $str;
}
$s = "Universitas Budi Luhur";
echo "\$str = $s<br>";
echo tambah_string ($s). "<br>";
echo "\$str = $s<br>";