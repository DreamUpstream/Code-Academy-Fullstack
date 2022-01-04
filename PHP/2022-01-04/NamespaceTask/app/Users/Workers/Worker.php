<?php
// Sukurkite klasę Worker, kuri paveldės User klasę ir įneš papildomą viešai neprienamą savybę salary ir viešai prieinamus metodus getSalary ir setSalary.

// require_once 'User.php';
namespace App\Users\Workers;
use App\Users\User;

abstract class Worker extends User {
	protected $salary;

	function __construct($name, $age, $salary = NULL)
	{
		// parent::__construct($name, $age);
		
		$this->setName($name);
		$this->setAge($age);

		if ($salary) {
			$this->setSalary($salary);
		}
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	public function getSalary()
	{
		return $this->salary;
	}

	public abstract function countSalary();
}