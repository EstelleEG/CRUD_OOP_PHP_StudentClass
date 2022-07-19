<?php 
require ('./Student.php');
//SHOW ALL STUDENTS
$student = new Student(0, '', '');
$student->fetchAll();

// $student = new Student(0, '', '');
// $student->delete('');