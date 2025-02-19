<?php
include_once "../utils/autoloader.php";

session_start();

$itemRepository = new itemRepository;
$items = $itemRepository->findItem();
$hero = $_SESSION['hero'];
include_once "./assets/headerfooter/header.php";
?>



<body class="bg-[url('../image/decors-boutique.gif')] bg-cover  bg-no-repeat h-[950px]">

<header class="flex w-[100%] justify-end pt-3">
        <a href="./mainpage.php" class="w-[55%] flex justify-end">
            <img class="w-[8%]" src="./assets/image/logo.png" alt="">
        </a>
        <div class="flex justify-end pr-10 items-center w-[45%]">
            <img class="w-[4%]" src="./assets/image/coin.png" alt="">
            <p class="text-white font-extrabold text-2xl"><?= $hero->getCoin() ?></p>
        </div>
    </header>


    <div class="w-[100%] flex-wrap flex justify-center gap-[5rem] pt-8">

        <?php
        foreach ($items as $item) {
        ?>

            <div class="w-[10%] hover:scale-110 transition-all hover:cursor-pointer rounded-lg flex-col justify-center items-center h-[200px] bg-opacity-[50%] bg-black flex">
                <img class="w-[60%] pt-4" src="<?= $item["item-img"] ?>" alt="">
                <p class="text-white"><?= $item["item_name"] ?></p>

                <div class="flex h-[100%] flex-col justify-end pb-4">
                    <div class="flex gap-2 pl-3">
                        <p class="text-white"><?= $item["price"] ?></p>
                        <img class="w-[13%]" src="./assets/image/coin.png" alt="">
                    </div>
                </div>

            </div>

        <?php
        }
        ?>
 </div>
   

 <script defer src="./assets/scripts/boutique.js"></script>
</body>