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

  <footer class="hidden lg:flex lg:flex-col col-span-2 lg:h-full bg-[#C2D3CD]">

    <div class="flex flex-col gap-12 p-4 fixed ">
      <form class=" flex justify-center" action="">
        <label class="hidden" for="rechercheAmis"></label>
        <input class="rounded-full bg-white font-[Roboto] px-2 py-1 w-35 xl:w-45 2xl:w-60" type="text" placeholder="Chercher un ami" id="rechercheAmis">
      </form>

      <div class="flex flex-col gap-8 font-[Roboto] ">
        <div class="bg-white rounded-full h-8 lg:flex gap-3 items-center px-2">
          <img class="w-4 h-4" src="./images/icone/house.png" alt="bouton accueil">
          <h3>Accueil</h3>
        </div>

        <div class="bg-white rounded-full  h-8 lg:flex gap-3 items-center px-2">
          <img class="w-4 h-4" src="./images/icone/profil.png" alt="bouton accueil">
          <h3>Profil</h3>
        </div>
      </div>
    </div>
  </footer>
  <div class="lg:col-span-10">
    <div class="lg:col-span-10 flex flex-col items-center w-full min-h-full">
      <div class="w-full flex justify-center">
        <header class="lg:flex lg:flex-col bg-white rounded-xl w-9/10 lg:drop-shadow-lg">
          <div
            class="bg-[url('../images/exemple_photo/image3.jpg')] w-full bg-center bg-cover flex lg:pl-5">
            <div
              class="w-32 h-32 bg-[url('../images/exemple_photo/image2.jpg')] rounded-full bg-center"></div>
          </div>

          <div class="lg:flex lg:flex-col lg:gap-6">
            <div class="text-center lg:text-start flex flex-col pl-12">
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

    <footer class="bg-[#C2D3CD] fixed bottom-0 w-full lg:hidden">
      <section class="flex justify-center gap-8 py-8 lg:hidden">
        <nav>
          <img
            src="./images/icone/house.png"
            alt="icone home"
            class="w-8 h-8 lg:w-6 lg:h-6 lg:hidden" />
        </nav>
        <nav class="lg:mb-4">
          <img
            src="./images/icone/loupe.png"
            alt="icone loupe"
            class="w-8 h-8 lg:w-6 lg:h-6 lg:hidden" />
        </nav>
        <nav class="lg:mb-4">
          <img
            src="./images/icone/add_photo.png"
            alt="icone plus"
            class="w-8 h-8 lg:w-6 lg:h-6 lg:hidden" />
        </nav>
        <nav class="lg:mb-4">
          <img
            src="./images/icone/profil.png"
            alt="icone profil"
            class="w-8 h-8 lg:w-6 lg:h-6 lg:hidden" />
        </nav>
        <nav class="lg:mb-4">
          <img
            src="./images/icone/message.png"
            alt="icone message"
            class="w-8 h-8 lg:w-6 lg:h-6 lg:hidden" />
        </nav>
      </section>
    </footer>
  </div>
</body>

</html>