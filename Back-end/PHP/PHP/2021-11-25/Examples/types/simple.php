<?php

// https://www.php.net/manual/en/language.types.integer.php
$int = 1234567;
// $int = 1_234_567; // decimal number (as of PHP 7.4.0)

// https://www.php.net/manual/en/language.types.float.php
$flt = 1.234;

// https://www.php.net/manual/en/language.types.string.php
$str = 'this is a simple string';
$strDouble = "\tthis is a \nsimple string";

var_dump($int, $flt, $str, $strDouble);
?>