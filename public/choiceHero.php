<?php 
include_once "./assets/headerfooter/header.php";

require_once '../utils/autoloader.php';

$heroRepository = new HeroRepository();

$heroes = $heroRepository->findAll();

?>

<body>
<header class="flex justify-center pt-3">
    <img class="w-[6%]" src="./assets/image/logo.png" alt="">
</header>


<main class="w-full flex flex-wrap gap-8 justify-center h-[700px]">

<?php 
/**
 * @var Hero $hero
 */
foreach($heroes as $hero): ?>
    <article class="flex flex-col hover:scale-110 transition-all justify-center items-center mt-8 shadow-xl gap-10">
        <img class="w-[50%]" src="<?= htmlspecialchars($hero->getUrl_img()) ?>" alt="<?= htmlspecialchars($hero->getName()) ?>">
        <p><?= htmlspecialchars($hero->getName()) ?></p>
        <form action="../process/processChoiceHero.php" method="post">
            <input type="hidden" name="name" value="<?= htmlspecialchars($hero->getName()) ?>">
            <input type="submit" value="Choisir !" class="bg-blue-500 hover:scale-125 transition-all rounded-lg p-7 text-white">
        </form>
    </article>

    <?php endforeach ?>

</main>

</body>