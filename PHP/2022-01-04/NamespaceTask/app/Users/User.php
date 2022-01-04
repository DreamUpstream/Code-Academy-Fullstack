<?php

// Sukurkite klasę User su viešai neprienamom savybėm: name, age ir viešai prieinamais metodas: setName, getName, setAge, getAge.
namespace App\Users;

class User {

	private $name;
	private $age;

	function __construct($name, $age)
	{
		// $this->name = $name;
		// $this->age  = $age;

		$this->setName($name);
		$this->setAge($age);
	}

	public function setName($name)
	{
		$this->name = ucfirst($name);
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}
}