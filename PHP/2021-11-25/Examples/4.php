<?php

// https://www.php.net/manual/en/language.operators.logical.php
// Logical Operators 
// 
// and
// &&
// 
// or
// ||
// 
// xor
// !

$speed = 40;

if ($speed > 35 && $speed < 55) {
    echo 'Greitis leistino greičio ribose <br>';
}

if ($speed > 35 and $speed < 55) {
    echo 'Greitis leistino greičio ribose <br>';
}

?>