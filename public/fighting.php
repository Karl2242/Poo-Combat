<?php

require_once '../utils/autoloader.php';

   


session_start();

/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];

/**
 * @var Monster $monster
 */
$monster = $_SESSION['monster'];

include_once "./assets/headerfooter/header.php";

?>

<body class="bg-center bg-[url('../image/decors-combat.gif')] bg-cover">
<header class="flex justify-center pt-3">
    <img class="w-[6%]" src="./assets/image/logo.png" alt="">
</header>

   


<div class="flex flex-col text-center justify-center">

   <?php

   if ($hero->getPv() <= 0) {
      header("Location: ./mainpage.php?=stop");
      $hero->changeHealth(0); 
   }
   
   elseif ($hero->getPv() > 20) {

      while ($hero->getPv() > 0 && $monster->getPV() > 0) {
         $hitHero = $hero->hit($monster);
         $hitMonster = $monster->hit($hero);

   ?>

         <p class="text-white"><?= $hero->getName() ?> à infligé <?= $hitHero ?> dégats</p>
         <p class="text-white">Le <?= $monster->getName() ?> à infligé <?= $hitMonster ?> dégats</p>
   
   
   <?php
      }

if($hero->getPv() < 0){
   $hero->changeHealth(0);
   echo "Le héro a perdu";
}


if($monster->getPv() < 0){
   $monster->changeHealth(100);
   echo "Le monstre a perdu";
}

   }
   ?>

<form class="hover:cursor-pointer p-6 bg-red-600 text-white" action="../process/processChangeHp.php" method="post">
<input class="w-full" type="submit" value="Retour a la base">
</form>

</div>


</body>

</html>