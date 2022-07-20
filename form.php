<?php
require('./Student.php');

$data = new Student(0, '', '');
$all = $data->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="table.css">
    <title>Display All</title>
</head>
<body>
    <h2>List of all Students</h2>
    <a class='btn btn-success' href="signupForm.php">ADD</a>

    <table class='table'>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
        </tr>

    <?php
        foreach($all as $key => $value){
            //var_dump($value);
    ?>

        <tr>
            <td><?=$value['nom']?></td>
            <td><?=$value['prenom']?></td>
            
            <td><a class='btn btn-info' href="read.php?id=<?=$value['id']?>">READ</a></td>
            <td><a class='btn btn-danger' href="delete.php?id=<?=$value['id']?>&req=delete">DELETE</a></td>
            <td><a class='btn btn-warning' href="edit.php?id=<?=$value['id']?>">UPDATE</a></td>
        </tr>
        
    <?php  
        }
    ?>

    </table>
    
</body>
</html>