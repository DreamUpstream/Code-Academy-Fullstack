<?php

require_once 'builder.php';

$tag = new Tag ('a');


$tag->setText('title')->setAttr('href', 'index.html')->show();

$tag2 = (new Tag ('br'))->show();

echo $tag->setText('title2')->setAttr('href', 'index.html')->get();