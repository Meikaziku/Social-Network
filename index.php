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

<body class="bg-[#AFBFC0] min-h-screen flex flex-col">

    <header class="bg-[#C2D3CD] w-full h-20 shrink-0"></header>

    <main class="flex-1 flex items-center justify-center w-full ">

        
          <section class="w-full">

          <form class="bg-white flex flex-col items-center py-16 font-[Roboto] gap-3" action="./process/lancement-session.php" method="post">

          <label class="text-2xl font-medium " for="pseudo">Connectez vous</label>
          <input class="w-1/2 rounded-sm text-center border-[0.1px]" type="text" id="pseudp" name="pseudo" placeholder="Entrez votre nom d'utilisateur" required>

          <button class="bg-[#4F46E5] rounded-sm px-4 py-2 drop-shadow-lg text-white" type="submit">Connexion</button>
          


          </form>

          </section>   


    </main>

    <footer class="bg-[#C2D3CD] w-full h-24 shrink-0"></footer>
</body>

</html>