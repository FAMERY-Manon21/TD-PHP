<?php


if(empty($_GET) == false);
echo " pas empty";

require_once "Voiture.php";

$voiture1 = new Voiture($_POST['marque'],$_POST['couleur'],$_POST['immatriculation']);

$voiture1->afficher();
?>