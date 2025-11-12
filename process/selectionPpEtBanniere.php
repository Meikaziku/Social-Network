<?php

session_start();

require_once('../utils/db-connect.php');

if (isset($_FILES['selectionBanniere']) && $_FILES['selectionBanniere']['name'] !== '' ) {
    $tmpName = $_FILES['selectionBanniere']['tmp_name'];
    $name = $_FILES['selectionBanniere']['name'];
    $size = $_FILES['selectionBanniere']['size'];
    $error = $_FILES['selectionBanniere']['error'];
    move_uploaded_file($tmpName, '../upload/' . $name);

    $request = $db->prepare('UPDATE user SET 
        banniere_photo = :selectionBanniere
        WHERE id = :id');


    try {
        $cheminFichier = "./upload/$name";
        
        
        $request->execute([
            ':id' => $_SESSION['user']['id'],
            ':selectionBanniere' => $cheminFichier
        ]);

        $_SESSION['user']['banniere_photo'] = $cheminFichier;

    } catch (PDOException $e) {
       
        echo $e->getMessage();
    }
}


if (isset($_FILES['selectionPp']) && $_FILES['selectionPp']['name'] !== '') {
    $tmpName = $_FILES['selectionPp']['tmp_name'];
    $name = $_FILES['selectionPp']['name'];
    $size = $_FILES['selectionPp']['size'];
    $error = $_FILES['selectionPp']['error'];
    move_uploaded_file($tmpName, '../upload/' . $name);

    $request = $db->prepare('UPDATE user SET 
        pp = :selectionPp
        WHERE id = :id');


    try {
        $cheminFichier = "./upload/$name";
        
        $request->execute([
            ':id' => $_SESSION['user']['id'],
            ':selectionPp' => $cheminFichier
        ]);

        $_SESSION['user']['pp'] = $cheminFichier;
        
    } catch (PDOException $e) {

        echo $e->getMessage();
    }
}



header('Location: ../profil.php');