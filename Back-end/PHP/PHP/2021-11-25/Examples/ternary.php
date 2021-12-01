<?php
$speed = 55;

echo ($speed <= 60) ? 'Greitis leistino greičio ribose' : 'Greičio viršijimas!'; 

// PHP 5.3
$var = $speed ?: 'Kita reikšmė';

// PHP 7
$var = $value ?? 'Kita reikšmė';
// $var = isset($value) ? $value : 'Kita reikšmė';
?>