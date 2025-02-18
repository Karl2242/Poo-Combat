<?php
require_once "../utils/autoloader.php";
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$monster = new Monster("Goblin", 80, "./assets/image/gobelin.png");

$_SESSION['monster'] = $monster;

header('Location: ../public/fighting.php');
exit;

?>