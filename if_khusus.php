<?php
$tahun = date ("Y");
$kabisat = ($tahun%4 == 0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <br>$tahun</br> $kabisat";