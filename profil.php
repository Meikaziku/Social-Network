<?php


session_start();

var_dump($_SESSION);

if (empty($_SESSION)) {
  header('Location: ./index.php');
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
    <div class="lg:col-span-10 flex flex-col items-center w-full min-h-full">
      <div class="w-full flex justify-center">
        <header
          class="lg:flex lg:flex-col bg-white rounded-xl w-9/10 lg:drop-shadow-lg"
          <?php if ($_SESSION['user']['banniere_photo'] !== '') { ?>
          style="background-image: url('<?= htmlspecialchars($_SESSION['user']['banniere_photo']) ?>'); 
           background-size: cover; 
           background-position: center;"
          <?php } ?>
        >

          <form action="./process/selectionPpEtBanniere.php" method="post" enctype="multipart/form-data">
            <div class="flex items-center justify-between w-full px-8">

              <div class="flex items-center gap-8">
                <label for="selectionBanniere" class="bg-[#4F46E5] rounded-sm px-4 py-2 drop-shadow-lg text-white w-40 h-10">
                  Modifier bannière
                </label>
                <input type="file" id="selectionBanniere" name="selectionBanniere" accept="image/png, image/jpeg" class="hidden" />
                <button class="bg-[#38713e] rounded-sm px-4 py-2 drop-shadow-lg text-white w-40 h-16" type="submit">Valider les modifications</button>
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
            <div class="text-center lg:text-start flex flex-col ">
              <h2 class="text-2xl font-bold">Meika</h2>
              <h3 class="font-light">@Meikaziku</h3>
            </div>

            <div
              class="grid grid-cols-3 lg:bg-[#F8F8F8] bg-[#C2D3CD] w-9/10 mx-auto gap-8 text-center rounded-xl mb-5 px-12">
              <p class="font-bold">
                530 <br />
                <span class="text-[14px] font-light">Posts</span>
              </p>
              <p class="font-bold">
                10.2K <br />
                <span class="text-[14px] font-light">Abonnés</span>
              </p>
              <p class="font-bold">
                430 <br />
                <span class="text-[14px] font-light">Abonnements</span>
              </p>
            </div>
          </div>
        </header>
      </div>

      <main class="flex flex-col gap-6 items-center pt-1 w-full h-full">
        <section
          class="flex flex-col items-center gap-2 bg-[#C2D3CD] w-9/10 p-3 rounded-xl lg:h-full lg:bg-white lg:p-16 lg:drop-shadow-lg">
          <div class="flex gap-2">
            <div
              class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
              <img
                src="./images/exemple_photo/image1.jpg"
                alt="photo exemple 1"
                class="object-cover h-full w-full rounded-xl" />
            </div>
            <div
              class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
              <img
                src="./images/exemple_photo/image2.jpg"
                alt="photo exemple 2"
                class="object-cover h-full w-full rounded-xl" />
            </div>
            <div
              class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
              <img
                src="./images/exemple_photo/image3.jpg"
                alt="photo exemple 3"
                class="object-cover h-full w-full rounded-xl" />
            </div>
          </div>

          <div class="flex gap-2">
            <div
              class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
              <img
                src="./images/exemple_photo/image4.jpg"
                alt="photo exemple 4"
                class="object-cover h-full w-full rounded-xl" />
            </div>
            <div
              class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
              <img
                src="./images/exemple_photo/image5.jpg"
                alt="photo exemple 5"
                class="object-cover h-full w-full rounded-xl" />
            </div>
            <div
              class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
              <img
                src="./images/exemple_photo/image6.jpg"
                alt="photo exemple 6"
                class="object-cover h-full w-full rounded-xl" />
            </div>
          </div>

          <div class="flex gap-2">
            <div
              class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
              <img
                src="./images/exemple_photo/image7.jpg"
                alt="photo exemple 7"
                class="object-cover h-full w-full rounded-xl" />
            </div>
            <div
              class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
              <img
                src="./images/exemple_photo/image8.jpg"
                alt="photo exemple 8"
                class="object-cover h-full w-full rounded-xl" />
            </div>
            <div
              class="rounded w-24 h-36 sm:w-40 md:w-56 lg:w-60 lg:h-48 xl:w-75">
              <img
                src="./images/exemple_photo/image9.jpg"
                alt="photo exemple 9"
                class="object-cover h-full w-full rounded-xl" />
            </div>
          </div>
        </section>
      </main>
    </div>

    <?php include './partials/footer_mobile.php'; ?>
  </div>
</body>

</html>