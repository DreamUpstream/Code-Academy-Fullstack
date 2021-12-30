<?php

require_once 'Programmer.php';
require_once 'Student.php';
require_once 'Teacher.php';

$programmer = new Programmer("Gabrielius");
$programmer->greetings();

$student = new Student("Gabrielius");
$student->greetings();

$teacher = new Teacher("Gabrielius");
$teacher->greetings();