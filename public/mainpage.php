<?php
require_once '../utils/autoloader.php';

session_start();

/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];

include_once "./assets/headerfooter/header.php";

?>

<main class="flex w-full items-center">
    <div class="w-[70%] pt-20 justify-start gap-8 flex"> <!-- Partie gauche -->
        <div class="flex flex-col items-center">
            <img class="w-[50%]" src="<?= $hero->getUrl_img() ?>" alt="<?= htmlspecialchars($hero->getName()) ?>">
            <p class="text-6xl font-extrabold"><?= htmlspecialchars($hero->getName()) ?></p>
            <div class="border-2 w-[50%] h-[60px] border-black ">
                <div id="barrevie" class="bg-green-600 w-[<?= htmlspecialchars($hero->getPv()) ?>%] h-full">
                </div>
            </div>
        </div>

    </div>

    <div class="w-[30%]"> <!-- Partie droite -->

        <a class="bg-red-400 px-40 py-5 text-white rounded-lg shadow-xl hover:scale-125 transition-all" href="../process/startingFight.php">Combattre !</a>


    </div>

</main>


</body>