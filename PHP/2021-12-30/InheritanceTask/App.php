<?php

require_once 'Student.php';
require_once 'Driver.php';

$driver = new Driver("Jonas", 32);
$driver->experience = 21;
$driver->category = 'A';
echo $driver->getAge() . PHP_EOL;
echo $driver->experience . PHP_EOL;
echo $driver->category . PHP_EOL;


$student = new Student("Gabrielius", 25);
$student->setScholarship(2500);
$student->setCourseyear(4) . PHP_EOL;

echo $student->getName() . PHP_EOL;
echo $student->getScholarship() . PHP_EOL;
echo $student->getCourseyear();
