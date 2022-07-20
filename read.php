<?php
//CRUD VIA BUTTON

require('Student.php');

$data = new Student($_GET['id'], '', '');
$id = $_GET['id'];
$data->setId($id);

if(isset($_POST['read'])){
    $data->setNom($_POST['nom']);
    $data->setPrenom($_POST['prenom']);
    //echo $data->fetchOne(); //recup an array
}

$queryResult = $data->fetchOne();
$student = $queryResult[0];

?>

<div>
    <p><?php echo $student['nom'];?></p>

    <p><?php echo $student['prenom'];?></p>

    <a href="form.php">
        <button style="background-color: pink">BACK</button>
    </a>

</div>

