<?php

require_once('./utils/db-connect.php');
session_start();

if (empty($_SESSION)) {
    header('Location: ./index.php');
}

$request =  $db->query('SELECT 
    posts.id AS idPost,
    posts.text,
    posts.created_at,
    posts.photo_url,
    user.id AS idUser,
    user.pp,
    user.pseudo,
    COUNT(`like`.id) AS nombreLike,
    COUNT(`commentaires`.id) AS nombreCommentaire
    FROM posts
    JOIN user ON posts.user_id = user.id
    LEFT JOIN commentaires ON commentaires.post_id = posts.id
    LEFT JOIN `like` ON `like`.post_id = posts.id
    GROUP BY posts.id, posts.text, posts.created_at, posts.photo_url, user.id, user.pp, user.pseudo
    ORDER BY posts.created_at DESC;');

$postsInformations = $request->fetchAll(PDO::FETCH_ASSOC);


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
    <script src="./like.js" defer></script>
</head>

<body class="bg-[#AFBFC0] min-h-screen lg:grid lg:grid-cols-12">

    <?php include './partials/footer_pc.php'; ?>

    <div class="hidden lg:block lg:col-span-2"></div>
    <div class="lg:col-span-10 lg:h-full">
        <header class=" bg-[#C2D3CD] py-5 lg:hidden">

            <div class="flex w-full justify-center items-center gap-2">
                <div class="rounded-full w-14 h-14 bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                <form class="w-15/20" action="">
                    <label class="hidden" for="rechercheAmis"></label>
                    <input class="rounded-full bg-white w-full h-10 p-2 font-[Roboto]" type="text" placeholder="Chercher un ami" id="rechercheAmis">
                </form>
            </div>

        </header>

        <main class="pt-8 pb-32 flex flex-col gap-4 lg:pb-8">

            <form action="./process/upload_post.php" method="POST" enctype="multipart/form-data" class="flex flex-col gap-1 items-center relative">

                <div class="bg-white p-3 shadow-md rounded-lg  w-19/20 lg:w-17/20">
                    <label for="selectionPhoto" class="block">

                        <span class="sr-only">Choose profile photo</span>
                        <input id="selectionPhoto" name="selectionPhoto" type="file" class="block w-full text-sm font-[Roboto] text-gray-500
                         file:me-4 file:py-2 file:px-4
                        file:rounded-lg file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-600 file:text-white
                        hover:file:bg-blue-700
                        file:disabled:opacity-50 file:disabled:pointer-events-none
                        dark:text-neutral-500
                        dark:file:bg-blue-500
                        dark:hover:file:bg-blue-400">
                    </label>
                </div>


                <label class="hidden" for="TextPost"></label>
                <input class="rounded-lg bg-white w-19/20 lg:w-17/20 h-10 py-8 px-12 2xl:px-24 font-[Roboto] relative drop-shadow-lg" type="text" id="TextPost" name="TextPost" placeholder="A quoi penses-tu exactements">

                <button
                    type="submite"
                    aria-label="Publier"
                    class="-translate-y-1/2 top-1/2 right-7 lg:right-20 xl:right-24 2xl:right-34 absolute bg-[#81b7a4] text-white rounded-full px-4 py-2 text-[16px] shadow-md font-[Roboto]">
                    Publier
                </button>


            </form>

            <!-- Post utilisateurs -->

            <?php foreach ($postsInformations as $postInformation) { ?>

                <section class="lg:flex lg:justify-center">
                    <article class="flex flex-col gap-3 justify-center lg:w-17/20 lg:bg-white rounded-lg p-5 drop-shadow-lg">
                        <div class="flex gap-2 px-2  items-center">
                            <img src="<?= htmlspecialchars($postInformation['pp']) ?>" class="rounded-full w-8 h-8">
                            <h3 class="font-[Roboto]"><?php echo $postInformation['pseudo'] ?></h3>
                        </div>
                        <p><?php echo $postInformation['text'] ?></p>
                        <div class="rounded w-full h-80">
                            <img src="<?= htmlspecialchars($postInformation['photo_url']) ?>"
                                alt="Photo de profil utilisateur"
                                class="object-cover w-full h-full lg:rounded-xlr">
                        </div>


                        <!-- Like, commentaire et date du post -->
                        <div class="flex justify-between">
                            <div class="flex justify-start items-center gap-4 px-2">

                                <div class="flex gap-2">
                                    <button class="likeBtn" data-post-id="<?= $postInformation['idPost'] ?>">

                                        <?php
                                        require_once './utils/db-connect.php';

                                        $request = "SELECT * FROM `like` WHERE user_id = :userId AND post_id = :postId";

                                        try {
                                            $stmt = $db->prepare($request);
                                            $stmt->execute([
                                                ':userId' => $_SESSION['user']['id'],
                                                ':postId' => $postInformation['idPost']

                                            ]);

                                            $existingLike = $stmt->fetch(PDO::FETCH_ASSOC);
                                        } catch (Exception $error) {
                                            echo "Erreur lors de la requete : " . $error->getMessage();
                                        }

                                        if($existingLike){
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

                                    <p><?php echo $postInformation['nombreCommentaire'] ?></p>
                                </div>

                            </div>


                            <?php echo $postInformation['created_at'] ?>
                        </div>
                    </article>
                </section>

            <?php } ?>

        </main>


        <?php include './partials/footer_mobile.php'; ?>
    </div>



</body>

</html>