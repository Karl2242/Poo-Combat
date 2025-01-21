<?php
session_start();

include_once "../utils/autoloader.php";

$monRepo = new HeroRepository();

$hero = $monRepo->findHeroByName($_POST['name']);

if ($hero) {
    header("Location: ../public/choiceHero.php");
    exit;
}


$monRepo->createHero(new Hero(0, $_POST['name'], 100, "./assets/image/hero.png"));
header("Location: ../public/choiceHero.php");
exit;
