<?php
require('Student.php');
//CRUD VIA BUTTON

$student = new Student(0, '', '');

if(isset($_GET['id']) && isset($_GET['req'])){
    if($_GET['req'] == 'delete'){
        $student->setId($_GET['id']);
        $student->delete();
        echo "<script>alert('Data has been deleted successfully');document.location='form.php'</script>";

    }
}