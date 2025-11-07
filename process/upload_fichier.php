<?php
require_once('../utils/db-connect.php');
var_dump($_POST);
var_dump($_FILES);

if(isset($_FILES['selectionPhoto'])){
    $tmpName = $_FILES['selectionPhoto']['tmp_name'];
    $name = $_FILES['selectionPhoto']['name'];
    $size = $_FILES['selectionPhoto']['size'];
    $error = $_FILES['selectionPhoto']['error'];
}

move_uploaded_file($tmpName, '../upload/'.$name);


$tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));

$tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];

if(in_array($extension, $extensions)){
    move_uploaded_file($tmpName, './upload/'.$name);
}
else{
    echo "Mauvaise extension";
}


?>