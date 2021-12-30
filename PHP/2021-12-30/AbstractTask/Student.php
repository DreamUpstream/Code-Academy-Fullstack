<?php

require_once 'Person.php';

class Student extends Person
{
    function __construct($name) {
        parent::__construct($name);
    }

    public function greetings() { 
        echo "Hello, I'm " . $this->name . "<br />";
    }
}
