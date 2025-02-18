<?php
include_once "../utils/autoloader.php";
include_once "./assets/headerfooter/header.php";

session_start();

$itemRepository = new itemRepository;
$items = $itemRepository->findItem();


?>



<body class="bg-[url('../image/decors-boutique.gif')] bg-cover  bg-no-repeat h-[900px]">
    

<div class="w-[100%] flex-wrap flex justify-center gap-[5rem] pt-8">

<?php
foreach ($items as $item) {
    ?>

<a href="boutique.php?id=<?= $item["id"]?>" class="w-[10%] hover:scale-110 transition-all hover:cursor-pointer rounded-lg flex-col justify-center items-center h-[200px] bg-opacity-[50%] bg-black flex">
    <img class="w-[60%]" src="<?= $item["item-img"] ?>" alt="">
    <p class="text-white"><?= $item["item_name"] ?></p>

<div class="flex h-[100%] flex-col justify-end pb-4">
    <div class="flex gap-2">
    <p class="text-white"><?= $item["price"] ?></p>
<img class="w-[13%]" src="./assets/image/coin.png" alt="">
</div>
</div>

</a>

<?php
}
?>

</div>


</body>