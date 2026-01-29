<?php

require_once('./utils/db-connect.php');
session_start();

if (empty($_SESSION)) {
    header('Location: ./index.php');
}

// gestion dde l'id post
if (
    !isset(
        $_GET['post']
    )
) {
    header('Location: ./accueil.php?error=2');
    return;
}

if (
    empty($_GET['post'])


) {
    header('Location: ./accueil.php?error=3');
    return;
}

// Input sanitization (Nettoyage d'input)
$idPost = htmlspecialchars(trim($_GET['post']));


// requete pour posts
$PostsInfos =  $db->prepare('SELECT 
    posts.id AS idPost,
    posts.text,
    posts.created_at,
    posts.photo_url,
    users.id AS idUser,
    users.pp,
    users.pseudo,
    COUNT(`like`.id) AS nombreLike,
    COUNT(`commentaires`.id) AS nombreCommentaire
    FROM posts
    JOIN users ON posts.user_id = users.id
    LEFT JOIN commentaires ON commentaires.post_id = posts.id
    LEFT JOIN `like` ON `like`.post_id = posts.id
    WHERE posts.id = :postId
    GROUP BY posts.id, posts.text, posts.created_at, posts.photo_url, users.id, users.pp, users.pseudo
    ORDER BY posts.created_at DESC;');

$PostsInfos->execute([

    ':postId' => $idPost
]);

$postInformation = $PostsInfos->fetch(PDO::FETCH_ASSOC);
if ($postInformation === false) {

    header('Location: ./accueil.php?error=4');
}

// requete pour afficher les commentaires

$commentaireInfos =  $db->prepare('SELECT 
    commentaires.text,
    commentaires.user_id,
    commentaires.post_id,
    commentaires.created_at,
    users.pseudo,
    users.pp
FROM commentaires
JOIN users ON commentaires.user_id = users.id
WHERE commentaires.post_id = :postId
ORDER BY commentaires.created_at ASC');

$commentaireInfos->execute([

    ':postId' => $idPost
]);

$commentairesInformations = $commentaireInfos->fetchAll(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network</title>
    <link rel="stylesheet" href="./style/output.css" />
    <link rel="shortcut icon" type="image/png" href="./images/icone/social-media.png"/>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rokkitt:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap");
    </style>
</head>

<body class="lg:grid lg:grid-cols-12 bg-[#AFBFC0] h-screen overflow-hidden">
    <?php include './partials/footer_pc.php'; ?>

    <div class="hidden lg:block lg:col-span-2"></div>
    <div class="lg:col-span-10 h-screen flex flex-col overflow-hidden">

        <header class=" bg-[#C2D3CD] py-5 px-4 lg:hidden">
            <a href="#"><img class="bg-white rounded-full p-2" src="./images/icone/icone_retour.png" alt="bouton retour en arrière"></a>
        </header>


        <main class="flex-1 flex flex-col h-full px-4 pt-4 gap-2 overflow-hidden lg:items-center lg:gap-0">

            <article class="flex flex-col gap-2 lg:w-19/20 lg:bg-white lg:rounded-t-2xl p-3">
                <div class="flex items-center gap-3">
                    <div class=><img class="w-12 h-12  rounded-full bg-center" src="<?= htmlspecialchars($postInformation['pp']) ?>" alt=""></div>
                    
                    <h3 class="font-[Roboto]"><?= $postInformation['pseudo'] ?></h3>
                </div>

                <div class="w-full h-80">
                    <img src="<?= htmlspecialchars($postInformation['photo_url']) ?>" alt="photo exemple 2" class="object-cover w-full h-full lg:rounded-xl">
                </div>


                <div class="flex justify-between">
                    <div class="flex justify-start items-center gap-4 px-2">

                        <div class="flex gap-2">
                            <button class="likeBtn" data-post-id="<?= $postInformation['idPost'] ?>">

                                <?php
                                require_once './utils/db-connect.php';

                                $request = "SELECT * FROM `like` WHERE user_id = :usersId AND post_id = :postId";

                                try {
                                    $stmt = $db->prepare($request);
                                    $stmt->execute([
                                        ':usersId' => $_SESSION['users']['id'],
                                        ':postId' => $postInformation['idPost']

                                    ]);

                                    $existingLike = $stmt->fetch(PDO::FETCH_ASSOC);
                                } catch (Exception $error) {
                                    echo "Erreur lors de la requete : " . $error->getMessage();
                                }

                                if ($existingLike) {
                                ?>
                                    <img src="./images/icone/like.png" alt="like icon">
                                <?php } else { ?>
                                    <img src="./images/icone/not-like.png" alt="not-like icon">
                                <?php } ?>
                            </button>
                            <p><?php echo $postInformation['nombreLike'] ?></p>
                        </div>



                        <div class="flex gap-2">

                            <a href="./commentaire.php?post=<?= $postInformation['idPost'] ?>"><img src="./images/icone/commentaire.png" alt=""></a>
                            <!-- <button type="submit"></button> -->

                            
                        </div>

                    </div>


                    <p class="text-[12px]"><?php echo $postInformation['created_at'] ?></p>
                </div>
            </article>

            <section class="bg-white w-19/20 mx-auto h-full max-h-full relative overflow-y-auto rounded-t-2xl px-6 pt-5 font-[Roboto] lg:m-0 lg:rounded-t-none flex flex-col">

                <!-- petite barre en haut de la section commentaire -->
                <div class="bg-white absolute top-0 left-0 right-0 rounded-t-2xl">
                    <div class="w-12 sm:w-16 h-0.5 bg-black mx-auto my-2 rounded" aria-hidden="true"></div>
                </div>

                <!-- container des commentaires avec scroll -->

                <?php foreach ($commentairesInformations as $commentaireInformation) { ?>

                    <div class="flex-1 overflow-y-auto pb-16">
                        <div class="flex flex-col gap-4 ">
                            <div class="flex items-center gap-2 ">
                                <div><img class="w-8 h-8 rounded-full bg-center" src="<?= htmlspecialchars($commentaireInformation['pp']) ?>" alt=""></div>
                                <div class="flex flex-col">
                                    <div class="flex gap-110 w-full items-center">
                                    <h3 class="font-light text-[14px]"><?= $commentaireInformation['pseudo'] ?></h3>
                                    <p class="text-[12px]"><?= $commentaireInformation['created_at'] ?></p>
                                    </div>
                                    <p class=""><?= $commentaireInformation['text'] ?></p>
                                    
                                </div>
                            </div>
                        </div>
                <?php } ?>

                    <div class="sticky bottom-0 left-0 right-0 bg-white border-t px-4 py-2">
                        <div class="flex gap-3 items-center">
                            <div class="w-8 h-8 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>

                            <form class="flex gap-3 w-full" action="./process/sectionCommentaire.php" method="post">
                                <label class="hidden" for="userCommentaire"></label>
                                <input class="rounded-full border border-gray-600 font-[Roboto] text-[14px] px-4 py-0.5 w-full" type="text" placeholder="Ecrit ton commentaire" name="userCommentaire" id="userCommentaire">
                                <input type="hidden" name="postId" value="<?= $idPost ?>">
                                <button type="submit"><img class="w-6 h-6" src="./images/icone/envoyer.png" alt="envoyer le commentaire"></button>
                            </form>

                        </div>
                    </div>
                    </div>




            </section>

        </main>


    </div>
</body>

</html>