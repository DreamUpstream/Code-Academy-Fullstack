<?php

// Sukurkite klasę Student, kuri paveldės User klasę ir įneš papildomas viešais neprienamas savybes stipendija, kursas bei jiems reikalingus metodus

// require_once 'User.php';
namespace App\Users;

class Student extends User {

	private $scholarship;
	private $course;

	function __construct($name, $age, $scholarship = NULL, $course = NULL)
	{
		parent::__construct($name, $age);

		// $this->setName($name);
		// $this->setAge($age);

		if ($scholarship) {
			$this->setScholarship($scholarship);
		}
		
		if ($course) {
			$this->setCourse($course);
		}
	}

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}