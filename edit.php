<?php
//CRUD VIA BUTTON

require('Student.php');

$data = new Student($_GET['id'], '', '');
$id = $_GET['id'];
$data->setId($id);

if(isset($_POST['edit'])){
    $data->setNom($_POST['nom']);
    $data->setPrenom($_POST['prenom']);
    echo $data->update();
    //echo "<script>alert("Data has been updated successfully");document.location='form.php'</script>";
}

$queryResult = $data->fetchOne();
$student = $queryResult[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <h3>Edit file</h3>

    <div>
        <form action="" method="post">
            <label for="Nom"></label>
            <input 
            type="text"
            id = 'nom'
            name='nom'
            value="<?php echo $student['nom'];?>"/>

            <label for="Prenom"></label>
            <input 
            type="text"
            id = 'prenom'
            name='prenom'
            value="<?php echo $student['prenom'];?>"/>

            <input type="submit" value="UPDATE" name="edit"/>

        </form>
    </div>
</body>
</html>