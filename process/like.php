<?php

session_start();

header('Content-Type: application/json');

$json = file_get_contents('php://input');
$data = json_decode($json, true);

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header('Location: ../ajout-rdv.php?error=1');
    return;
}

if (
    !isset(
        $data['postId']

    )
) {
    header('Location: ../accueil.php?error=2');
    return;
}

$postId = htmlspecialchars(trim($data['postId']));


require_once '../utils/db-connect.php';

$request = "SELECT * FROM `like` WHERE user_id = :usersId AND post_id = :postId";

try {
    $stmt = $db->prepare($request);
    $stmt->execute([
        ':usersId' => $_SESSION['users']['id'],
        ':postId' => $postId

    ]);

    $existingLike = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (Exception $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}

if ($existingLike) {

    $request = "DELETE FROM `like` WHERE user_id = :usersId AND post_id = :postId";

    try {
        $stmt = $db->prepare($request);
        $stmt->execute([
            ':usersId' => $_SESSION['users']['id'],
            ':postId' => $postId

        ]);
    } catch (Exception $error) {
        echo "Erreur lors de la requete : " . $error->getMessage();
    }
} else {
    $request = "INSERT INTO `like` (like.user_id, like.post_id) VALUES (:usersId, :postId)";

    try {
        $stmt = $db->prepare($request);
        $stmt->execute([
            ':usersId' => $_SESSION['users']['id'],
            ':postId' => $postId

        ]);
    } catch (Exception $error) {
        echo "Erreur lors de la requete : " . $error->getMessage();
    }
}

echo json_encode([
    'succes' => true,
    'existingLike' => $existingLike
]);


