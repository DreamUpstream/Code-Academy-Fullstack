<?php

require_once 'builder.php';

$tag = new Tag ('a');


$tag->setText('title')->setAttr('href', 'index.html')->show();

(new Tag ('br'))->show();

echo $tag->setText('title2')->setAttr('href', 'index.html')->get();