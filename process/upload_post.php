<?php
session_start();
require_once('../utils/db-connect.php');



// gestion image
if (isset($_FILES['selectionPhoto'])) {
    $tmpName = $_FILES['selectionPhoto']['tmp_name'];
    $name = $_FILES['selectionPhoto']['name'];
    $size = $_FILES['selectionPhoto']['size'];
    $error = $_FILES['selectionPhoto']['error'];
}

move_uploaded_file($tmpName, '../upload/' . $name);


$tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));

//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];

$photoUrl = './upload/' . $name;

if (in_array($extension, $extensions)) {
    move_uploaded_file($tmpName, $photoUrl);
} else {
    echo "Mauvaise extension";
}


// gestion du texte
if (
    !isset(
        $_POST['TextPost']
    )
) {
    header('Location: ../accueil.php?error=2');
    return;
}

if (
    empty($_POST['TextPost'])


) {
    header('Location: ../accueil.php?error=3');
    return;
}

// Input sanitization (Nettoyage d'input)
$textPost = htmlspecialchars(trim($_POST['TextPost']));


// requette creation du post
$request = $db->prepare('INSERT INTO posts (posts.user_id, posts.text, posts.photo_url, posts.created_at)
        VALUES (:id, :textPost, :photoUrl, :createdAt)
        ');

try {
    $request->execute([
        ':id' => $_SESSION['users']['id'],
        ':photoUrl' => $photoUrl,
        ':textPost' => $_POST['TextPost'],
        ':createdAt' => date("Y-m-d H:i:s")

    ]);
} catch (PDOException $e) {

    echo $e->getMessage();
}

header('Location: ../accueil.php');
