<?php

require_once('./utils/db-connect.php');
session_start();

if (empty($_SESSION)) {
  header('Location: ./index.php');
}

$request = ('SELECT posts.photo_url, posts.created_at 
FROM posts 
WHERE user_id = :userId
ORDER BY posts.created_at DESC;');

try {
  $stmt = $db->prepare($request);
  $stmt->execute([
    ':userId' => $_SESSION['user']['id'],

  ]);

  $postsUtilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $error) {
  echo "Erreur lors de la requete : " . $error->getMessage();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./style/output.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rokkitt:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap");
  </style>
</head>

<body
  class="bg-[#AFBFC0] font-[Roboto] min-h-screen flex flex-col lg:grid lg:grid-cols-12 gap-3">

  <?php include './partials/footer_pc.php'; ?>



  <div class="hidden lg:block lg:col-span-2"></div>
  <div class="lg:col-span-10">
    <div class="lg:col-span-10 flex flex-col items-center w-full min-h-full gap-1">
      <div class="w-full flex justify-center">
        <header
          class="lg:flex lg:flex-col bg-[#FFFFFF] rounded-xl w-9/10 lg:drop-shadow-lg"
          <?php if ($_SESSION['user']['banniere_photo'] !== '') { ?>
          style="background-image: url('<?= htmlspecialchars($_SESSION['user']['banniere_photo']) ?>'); 
           background-size: cover; 
           background-position: center;"
          <?php } ?>>

          <form action="./process/selectionPpEtBanniere.php" method="post" enctype="multipart/form-data">
            <div class="flex items-center justify-between w-full px-8">

              <div class="flex items-center gap-4">
                <label for="selectionBanniere" class="bg-[#4F46E5] rounded-sm drop-shadow-lg text-white text-[13px] px-4 py-2">
                  Modifier bannière
                </label>
                <input type="file" id="selectionBanniere" name="selectionBanniere" accept="image/png, image/jpeg" class="hidden" />
                <button class="bg-[#38713e] rounded-sm drop-shadow-lg px-4 py-2 text-white text-[13px]" type="submit">Valider les modifications</button>
              </div>



              <label for="selectionPp" class="cursor-pointer">
                <?php if (empty($_SESSION['user']['pp'])) { ?>
                  <img src="../images/icone/photo_profil_basique.jpg"
                    alt="Photo de profil"
                    class="w-32 h-32 rounded-full object-cover">
                <?php } else { ?>
                  <img src="<?= htmlspecialchars($_SESSION['user']['pp']) ?>"
                    alt="Photo de profil utilisateur"
                    class="w-32 h-32 rounded-full object-cover">
                <?php } ?>

              </label>
              <input class="hidden" type="file" id="selectionPp" name="selectionPp" accept="image/png, image/jpeg" />



            </div>
          </form>

          <div class="lg:flex lg:flex-col lg:gap-6 px-20">
            <div class="text-center lg:text-start flex flex-col w-fit bg-[#F8F8F8] gap-8 px-4 rounded-xl ">
              <h2 class="text-2xl font-bold font-[Roboto] "><?php echo $_SESSION['user']['pseudo'] ?></h2>

            </div>

            <div
              class="grid grid-cols-3  bg-[#F8F8F8] w-9/10 mx-auto gap-8 text-center rounded-xl mb-5 px-12">
              <p class="font-bold">
                530 <br />
                <span class="text-[14px] font-light font-[Roboto]">Posts</span>
              </p>
              <p class="font-bold">
                10.2K <br />
                <span class="text-[14px] font-light font-[Roboto]">Abonnés</span>
              </p>
              <p class="font-bold">
                430 <br />
                <span class="text-[14px] font-light font-[Roboto]">Abonnements</span>
              </p>
            </div>
          </div>
        </header>
      </div>

      <main class="flex flex-col gap-6 items-center pt-1 w-full h-full">


        <section
          class="flex flex-col items-center gap-2 bg-[#C2D3CD] w-9/10 p-3 rounded-xl lg:h-full lg:bg-white lg:p-16 lg:drop-shadow-lg">
          <?php foreach ($postsUtilisateur as $postUtilisateur) { ?>
            <div class="flex gap-2">
              <div
                class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
                <img
                  src=<?= htmlspecialchars($postUtilisateur['photo_url']) ?>
                  alt="photo exemple 1"
                  class="object-cover h-full w-full rounded-xl" />
              </div>
            <?php } ?>
        </section>


      </main>
    </div>

    <?php include './partials/footer_mobile.php'; ?>
  </div>
</body>

</html>