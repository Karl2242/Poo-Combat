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

         <p><?= $hero->getName() ?> à infligé <?= $hitHero ?> dégats</p>
         <p>Le <?= $monster->getName() ?> à infligé <?= $hitMonster ?> dégats</p>
   
   
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

</div>


</body>

</html>