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
                    <div class="w-12 h-12  rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                    <h3 class="font-[Roboto]  ">Meikaziku</h3>
                </div>

                <div class="w-full h-80">
                    <img src="./images/exemple_photo/image3.jpg" alt="photo exemple 2" class="object-cover w-full h-full lg:rounded-xl">
                </div>
                <div class="flex justify-start items-center gap-4">
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

            <section class="bg-white w-19/20 mx-auto h-full max-h-full relative overflow-y-auto rounded-t-2xl px-6 pt-5 font-[Roboto] lg:m-0 lg:rounded-t-none flex flex-col">

                <!-- petite barre en haut de la section commentaire -->
                <div class="bg-white absolute top-0 left-0 right-0 rounded-t-2xl">
                    <div class="w-12 sm:w-16 h-0.5 bg-black mx-auto my-2 rounded" aria-hidden="true"></div>
                </div>

                <!-- container des commentaires avec scroll -->
                <div class="flex-1 overflow-y-auto pb-16">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                            <div>
                                <h3 class="font-light text-[14px]">Meikaziku</h3>
                                <p class="">Salut, super photo</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                            <div>
                                <h3 class="font-light text-[14px]">Meikaziku</h3>
                                <p class="">Salut, super photo</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                            <div>
                                <h3 class="font-light text-[14px]">Meikaziku</h3>
                                <p class="">Salut, super photo</p>
                            </div>
                        </div>


                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                            <div>
                                <h3 class="font-light text-[14px]">Meikaziku</h3>
                                <p class="">Salut, super photo</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                            <div>
                                <h3 class="font-light text-[14px]">Meikaziku</h3>
                                <p class="">Salut, super photo</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                            <div>
                                <h3 class="font-light text-[14px]">Meikaziku</h3>
                                <p class="">Salut, super photo</p>
                            </div>
                        </div>



                    </div>
                </div>


                <div class="sticky bottom-0 left-0 right-0 bg-white border-t px-4 py-2">
                    <div class="flex gap-3 items-center">
                        <div class="w-8 h-8 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                        <form class="flex gap-3 w-full" action="">
                            <label class="hidden" for="rechercheAmis"></label>
                            <input class="rounded-full border border-gray-600 font-[Roboto] text-[14px] px-4 py-0.5 w-full" type="text" placeholder="Ecrit ton commentaire" id="rechercheAmis">
                            <button type="submit"><img class="w-6 h-6" src="./images/icone/envoyer.png" alt="envoyer le commentaire"></button>
                        </form>
                    </div>
                </div>

            </section>

        </main>


    </div>
</body>

</html>