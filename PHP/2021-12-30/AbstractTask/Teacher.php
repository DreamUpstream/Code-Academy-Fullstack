<?php

require_once 'Person.php';

class Teacher extends Person
{
    function __construct($name) {
        parent::__construct($name);
    }

    public function greetings() { 
        echo "Hello students, I'm " . $this->name . "<br />";
    }
}
