<?php

require_once '../utils/autoloader.php';

var_dump($_POST);

$heroRepo = new HeroRepository();

$hero = $heroRepo->findHeroByName($_POST['name']);

if (!$hero) {
    header('Location: ../public/choiceHero.php');
    exit;
}


session_start();

$_SESSION['hero'] = $hero;

header('Location: ../public/mainpage.php');
exit;
