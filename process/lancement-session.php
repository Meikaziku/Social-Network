<?php

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header('Location: ../index.php?error=1');
    return;
}

if (
    !isset(
        $_POST['pseudo']

    )
) {
    header('Location: ../index.php?error=2');
    return;
}



if (
    empty($_POST['pseudo'])

) {
    header('Location: ../index.php?error=3');
    return;
}

// Input sanitization (Nettoyage d'input)
$pseudo = htmlspecialchars(trim($_POST['pseudo']));

require_once '../utils/db-connect.php';

$user =  $db->prepare('SELECT * FROM `user` WHERE `pseudo` = :pseudo ');
$user->execute([
    ':pseudo' => $pseudo
]);
$userInformations = $user->fetch(PDO::FETCH_ASSOC);


if (!$userInformations) {
    $insert = $db->prepare('INSERT INTO user (pseudo) VALUES (:pseudo)');
    $insert->execute([':pseudo' => $pseudo]);


    $stmt = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo');
    $stmt->execute([':pseudo' => $pseudo]);
    $userInformations = $stmt->fetch(PDO::FETCH_ASSOC);
}

session_start();

$_SESSION['user'] = $userInformations;


header('Location: ../accueil.php');