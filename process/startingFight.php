<?php
require_once "../utils/autoloader.php";
session_start();

$monster = new Monster("Goblin", 80, "./assets/image/gobelin.png");

$_SESSION['monster'] = $monster;

header('Location: ../public/fighting.php');
exit;

?>