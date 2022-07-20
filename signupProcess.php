<?php
if(isset($_POST['save'])){
    require('Student.php');
    $student = new Student(0, '', '');
    $student->setNom($_POST['nom']);
    $student->setPrenom($_POST['prenom']);
    $student->insert();
}












