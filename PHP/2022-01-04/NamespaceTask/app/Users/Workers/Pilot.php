<?php

// require_once 'Worker.php';
namespace App\Users\Workers;

class Pilot extends Worker {
    
    public function countSalary()
    {
        return $this->getSalary() * 5;
    }
}