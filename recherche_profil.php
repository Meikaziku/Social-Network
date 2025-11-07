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

<body class="min-h-screen lg:grid lg:grid-cols-12 bg-[#AFBFC0]">
    <!-- footer pc -->
    <?php include './partials/footer_pc.php'; ?>

    <div class="hidden lg:block lg:col-span-2"></div>
    <div class="lg:col-span-10">
        <header class=" bg-[#C2D3CD] py-5 px-4 lg:hidden">

            <div class="flex w-full justify-between">
                <a href="#"><img class="bg-white rounded-full p-2" src="./images/icone/icone_retour.png" alt="bouton retour en arrière"></a>
                <form class="w-15/20" action="">
                    <label class="hidden" for="rechercheAmis"></label>
                    <input class="rounded-full bg-white w-full h-10 p-2 font-[Roboto]" type="text" placeholder="Chercher un ami" id="rechercheAmis">
                </form>
            </div>

        </header>

        <main class=" lg:flex justify-center">

            
            <section class="flex flex-col gap-4 p-4 lg:bg-white lg:w-9/10 lg:gap-8 lg:rounded-b-xl lg:shadow-md">

            
            <form class=" justify-start hidden lg:flex" action="">
                <label class="hidden" for="rechercheAmis"></label>
                <input class="rounded-full bg-[#F2F3F4] font-[Roboto] px-2 py-1 w-9/10 " type="text" placeholder="Chercher un ami" id="rechercheAmis">
            </form>

                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                    <h3 class="font-[Roboto]  ">Meikaziku</h3>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                    <h3 class="font-[Roboto]  ">Meikaziku</h3>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                    <h3 class="font-[Roboto]  ">Meikaziku</h3>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-[url('../images/exemple_photo/image2.jpg')] bg-center"></div>
                    <h3 class="font-[Roboto]  ">Meikaziku</h3>
                </div>
            </section>
        </main>


        <!-- footer mobile -->
        <?php include './partials/footer_mobile.php'; ?>
    </div>
</body>

</html>