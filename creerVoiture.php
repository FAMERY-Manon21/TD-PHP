<?php


if(empty($_GET) == false);
echo " pas empty";

require_once "Voiture.php";

$mar = $_POST['marque'];
$coul = $_POST['couleur'];
$im = $_POST['immatriculation'];

$voiture1 = new Voiture($mar,$coul,$im);

$voiture1->afficher();

?>
