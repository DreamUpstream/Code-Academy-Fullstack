<?php

require_once 'Person.php';

class Programmer extends Person
{
    function __construct($name) {
        parent::__construct($name);
    }

    public function greetings() { 
        echo "Hello world! I'm " . $this->name . "<br />";
    }
}
