<?php
// https://www.php.net/manual/en/language.types.object.php

class Foo
{
    function doFoo()
    {
        echo 'Doing foo.'; 
    }
}

$bar = new Foo;

$bar->doFoo();