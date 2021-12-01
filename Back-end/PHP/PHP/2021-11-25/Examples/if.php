<?php

// https://www.php.net/manual/en/control-structures.if.php

$speed = 80;

if ($speed < 30) {
    echo 'Greitis leistino greičio ribose';
} elseif ($speed == 30) {
    echo 'Jūsų greitis yra 30 km/h';
} elseif ($speed == 40) {
    echo 'Jūsų greitis yra 40 km/h';
} elseif ($speed == 50) {
    echo 'Jūsų greitis yra 50 km/h';
} elseif ($speed == 60) {
    echo 'Jūsų greitis yra 60 km/h';
} else { 
    echo 'Greičio viršijimas!';
}

?>