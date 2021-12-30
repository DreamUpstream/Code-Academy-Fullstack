<?php

require_once 'Worker.php';

class Driver extends Worker
{

    public $experience, $category;

    public function __construct($name, $age) {
        $this->setName($name);
        $this->setAge($age);
      }

}
