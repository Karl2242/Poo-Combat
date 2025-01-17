<?php
session_start();

include_once "../utils/autoloader.php";

$monRepo = new HeroRepository();

$cvraioupaslesang = $monRepo->verifyHero($_POST['name']);



if($cvraioupaslesang == false){
    header("Location: ../public/choiceHero.php");
    exit;
}else{
    $monRepo->createHero($_POST['name']);
header("Location: ../public/choiceHero.php");
exit;
}

?>