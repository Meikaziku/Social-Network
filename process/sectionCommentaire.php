<?php

// requete pour envoyer un commentaire
session_start();
require_once '../utils/db-connect.php';

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header('Location: ./accueil.php?error=1');
    return;
}


if (
    !isset(
        $_POST['userCommentaire'],
        $_POST['postId'],
        

    )
) {
    header('Location: ./accueil.php?error=2');
    return;
}

$userCommentaire = htmlspecialchars(trim($_POST['userCommentaire']));
$postId = htmlspecialchars(trim($_POST['postId']));




$request = $db->prepare('INSERT INTO commentaires ( commentaires.user_id, commentaires.post_Id, commentaires.text, commentaires.created_at)
        VALUES (:id, :postId, :userCommentaire, :createdAt)
        ');

try {
    $request->execute([
        ':id' => $_SESSION['user']['id'],
        ':postId' => $postId,
        ':userCommentaire' => $userCommentaire,
        ':createdAt' => date("Y-m-d H:i:s")

    ]);
} catch (PDOException $e) {

    echo $e->getMessage();
}



header("Location: ../commentaire.php?post=$postId");