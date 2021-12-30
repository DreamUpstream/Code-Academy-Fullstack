<?php

require_once 'User.php';

class Student extends User
{
    public function __construct($name, $age) {
        $this->setName($name);
        $this->setAge($age);
    }
    private $scholarship, $courseyear;

    public function setScholarship($scholarship) {
        $this->scholarship = $scholarship;
    }

    public function getScholarship () {
        return $this->scholarship;
    }

    public function setCourseyear($courseyear) {
        $this->courseyear = $courseyear;
    }

    public function getCourseyear () {
        return $this->courseyear;
    }

}
