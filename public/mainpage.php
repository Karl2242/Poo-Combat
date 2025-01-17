<?php 
session_start();

include_once "./assets/headerfooter/header.php";

?>

<main class="flex w-full items-center">
<div class="w-[70%] pt-20 justify-start gap-8 flex">  <!-- Partie gauche -->
<div class="flex flex-col items-center">
<img class="w-[50%]" src="<?=$_SESSION["img"] ?>" alt="">
<p class="text-6xl font-extrabold"><?= $_SESSION["name"] ?></p>
<div class="border-2 w-[50%] h-[60px] border-black ">
    <div id="barrevie" class="bg-green-600 w-[<?=$_SESSION["pv"]?>%] h-full">
</div>
    </div>
</div>

</div>

<div class="w-[30%]"> <!-- Partie droite -->

<a class="bg-red-400 px-40 py-5 text-white rounded-lg shadow-xl hover:scale-125 transition-all" href="">Combattre !</a>


</div>

</main>


</body>

