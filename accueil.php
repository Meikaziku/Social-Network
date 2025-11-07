
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/output.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rokkitt:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap");
    </style>
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

            <form action="./process/upload_fichier.php" method="POST" enctype="multipart/form-data" class="flex justify-center relative">

                <label class="absolute left-6 md:left-8 lg:left-20 xl:left-24 2xl:left-34 top-1/2 z-10 -translate-y-1/2" for="selectionPhoto"><img class="w-6 h-6 " src="./images/icone/trombone.png" alt="icobe d'un trombonne"></label>
                <input class=" w-6 h-6 hidden" type="file" id="selectionPhoto" name="selectionPhoto" accept="image/png, image/jpeg" />

                <label class="hidden" for="envoieDePost"></label>
                <input class="rounded-lg bg-white w-19/20 lg:w-17/20 h-10 py-8 px-12 2xl:px-24 font-[Roboto] relative drop-shadow-lg" type="text" id="envoieDePost" placeholder="A quoi penses-tu exactements" required>

                <button
                    type="submite"
                    aria-label="Publier"
                    class="-translate-y-1/2 top-1/2 right-7 lg:right-20 xl:right-24 2xl:right-34 absolute bg-[#81b7a4] text-white rounded-full px-4 py-2 text-[16px] shadow-md font-[Roboto]">
                    Publier
                </button>
            </form>

            <!-- Post utilisateurs -->
            <section class="lg:flex lg:justify-center">
                <article class="flex flex-col gap-3 justify-center lg:w-17/20 lg:bg-white rounded-lg p-5 drop-shadow-lg">
                    <div class="flex gap-2 px-2  items-center">
                        <div class="rounded-full w-8 h-8 bg-[url('../images/exemple_photo/image4.jpg')]"></div>
                        <h3 class="font-[Roboto]">Vincent</h3>
                    </div>
                    <div class="rounded w-full h-80">
                        <img src="./images/exemple_photo/image3.jpg" alt="photo exemple 2" class="object-cover w-full h-full lg:rounded-xl">
                    </div>
                    <div class="flex justify-start items-center gap-4 px-2">
                        <div class="flex gap-2 font-[Roboto] items-center">
                            <img src="./images/icone/like.png" alt="icone like">
                            <p>22</p>
                        </div>
                        <a class="flex text-end gap-2 font-[Roboto]" href="#">
                            <img src="./images/icone/commentaire.png" alt="icone commentaire">
                            <p>24</p>
                        </a>
                    </div>
                </article>
            </section>

            <section class="lg:flex lg:justify-center">
                <article class="flex flex-col gap-3 justify-center lg:w-17/20 lg:bg-white rounded-lg p-5 drop-shadow-lg">
                    <div class="flex gap-2 px-2  items-center">
                        <div class="rounded-full w-8 h-8 bg-[url('../images/exemple_photo/image4.jpg')]"></div>
                        <h3 class="font-[Roboto]">Vincent</h3>
                    </div>
                    <div class="rounded w-full h-80">
                        <img src="./images/exemple_photo/image3.jpg" alt="photo exemple 2" class="object-cover w-full h-full lg:rounded-xl">
                    </div>
                    <div class="flex justify-start items-center gap-4 px-2">
                        <div class="flex gap-2 font-[Roboto] items-center">
                            <img src="./images/icone/like.png" alt="icone like">
                            <p>22</p>
                        </div>
                        <a class="flex text-end gap-2 font-[Roboto]" href="#">
                            <img src="./images/icone/commentaire.png" alt="icone commentaire">
                            <p>24</p>
                        </a>
                    </div>
                </article>
            </section>
        </main>

        <!-- footer  -->
        <?php include './partials/footer_mobile.php'; ?>
    </div>



</body>

</html>