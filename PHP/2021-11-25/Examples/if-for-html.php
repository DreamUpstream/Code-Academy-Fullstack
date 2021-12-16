<?php

$speed = 80;

?>

<?php if ($speed < 30): ?>

<h1>Greitis labai mažas</h1>

<?php elseif($speed >= 30  && $speed < 60): ?>

<h1>Greitis leistino greičio ribose</h1>

<?php else: ?>

<h1>Greičio viršijimas!</h1>

<?php endif ?>