<?php
require_once '../utils/autoloader.php';

session_start();

/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];

include_once "./assets/headerfooter/header.php";

?>

<body class="bg-center bg-[url('../image/decor-main.gif')] bg-cover">

    <header class="flex w-[100%] justify-end pt-3">
        <div class="w-[55%] flex justify-end">
            <img class="w-[8%]" src="./assets/image/logo.png" alt="">
        </div>
        <div class="flex justify-end pr-10 items-center w-[45%]">
            <img class="w-[4%]" src="./assets/image/coin.png" alt="">
            <p class="text-white font-extrabold text-2xl"><?= $hero->getCoin() ?></p>
        </div>
    </header>


    <main class="flex w-full items-center">
        <div class="w-[70%] pt-20 justify-start gap-8 flex"> <!-- Partie gauche -->
            <div class="flex flex-col items-center">
                <img class="w-[50%] animate-pulse anim-perso" src="<?= $hero->getUrl_img() ?>" alt="<?= htmlspecialchars($hero->getName()) ?>">
                <p class="text-6xl text-white font-extrabold"><?= htmlspecialchars($hero->getName()) ?></p>
                <div class="border-2 w-[50%] h-[60px] border-white ">
                    <div id="barrevie" class="bg-green-600 h-full" style="width: <?= htmlspecialchars($hero->getPv()) ?>%">
                    </div>
                </div>
            </div>

        </div>

        <div class="w-[30%] flex-col gap-5"> <!-- Partie droite -->
            <a class="bg-red-400 px-40 py-5 text-white rounded-lg shadow-xl hover:scale-125 transition-all" href="../process/startingFight.php">Combattre !</a>
            <form class="pt-10" action="../process/processBoutique.php" method="post">
                    <input class="bg-blue-500 hover:cursor-pointer rounded-xl shadow-lg w-[69%] pt-6 p-5 text-white" type="submit" value="Boutique">
            </form>


        </div>

    </main>

    <script defer src="./assets/scripts/healthbar.js"></script>
</body>