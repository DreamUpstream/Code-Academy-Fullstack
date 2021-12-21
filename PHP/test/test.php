<?php
// https://www.php.net/manual/en/function.fopen.php
$filename = 'data/dummy.txt';
$handle = fopen($filename, 'a');
if (fwrite($handle, uniqid() . "\n") === FALSE) {
    echo "Cannot write to file ($filename)";
    exit;
}
fclose($handle);