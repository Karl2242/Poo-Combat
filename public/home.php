<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solo Leveling</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/output.css">
</head>
<body>
    
<header class="flex justify-center pt-3">
    <img class="w-[10%]" src="./assets/image/logo.png" alt="">
</header>

<form class="flex justify-center pt-7" action="../process/processCreateHero.php" method="post">
    <div class="flex flex-col items-center w-full gap-4">
<input class="bg-slate-900 w-[15%] pl-3 rounded-md h-[100px] text-white shadow-xl border-solid" placeholder="Entrez votre nom de héro !" type="text" name="name" id="name" required>
<button class="bg-slate-900 p-3 rounded-lg hover:bg-slate-500 text-white hover:scale-110 transition-all" type="submit">Commencer Votre Aventure !</button>
</div>
</form>

</body>
</html>