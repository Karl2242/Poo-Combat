<?php
include_once "../utils/autoloader.php";
include_once "./assets/headerfooter/header.php";


$itemRepository = new itemRepository;
$item = $itemRepository->findItem();
?>



<body class="bg-[url('../image/decors-boutique.gif')] bg-cover  bg-no-repeat h-[900px]">
    

<?php
foreach ($items as $item) {
    ?>

<div>
    <img src="<?= $item["img_img"] ?>" alt="">
</div>

<?php
}

?>


</body>