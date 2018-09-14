<?php
$number = 1234.56;

$english_format_number = number_format($number);
echo "<br>".$english_format_number;

$nombre_format_francais = number_format($number, 2, ',', ' ');
echo "<br>".$nombre_format_francais;

$format_indonesia = number_format ($number, 2, ',', '.');
echo "<br>".$format_indonesia;
$number = 1234.5678;

$english_format_number = number_format($number, 2, '.', '');
echo "<br>". $english_format_number;