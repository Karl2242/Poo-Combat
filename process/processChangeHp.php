<?php
require_once '../utils/autoloader.php';

session_start();


/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];
$heroRepo = new HeroRepository();
$heroRepo->setHp($hero->getPv(), $hero->getName(), $hero->getCoin());

header("Location: ../public/mainpage.php");