<?php

// require_once 'Driver.php';
// require_once 'Pilot.php';
// require_once 'Student.php';
require "../vendor/autoload.php";

use App\Users\Student;
use App\Users\Workers\Driver;
use App\Users\Workers\Pilot;

$student = new Student('petras', 23, 200, 2);
$driver  = new Driver('rokas', 37, 200, 2, 'A');

var_dump($student);
var_dump($driver);

$student2 = new Student('petras', 23);

$student2->setScholarship(200);
$student2->setCourse(200);

var_dump($student2);

// new Driver('rokas', 37, 200, 2, 'CE');

$pilot = new Pilot('tomas', 25, 200);

var_dump($driver->countSalary(), $pilot->countSalary());