<?php 
session_start();

include_once "./assets/headerfooter/header.php";

?>

<main class="flex w-full">
<div class="w-[70%] gap-4 flex justify-start flex-col">  <!-- Partie gauche -->

<img class="w-[25%]" src="<?=$_SESSION["img"] ?>" alt="">
<p class="text-6xl font-extrabold"><?= $_SESSION["name"] ?></p>
<div class="border-2 w-[20%] h-[60px] border-black ">
    <div id="barrevie" class="bg-green-600 w-[<?=$_SESSION["pv"]?>%] h-full">

    </div>
</div>

</div>


<div class="w-[30%]"> <!-- Partie droite -->

</div>

</main>


</body>

