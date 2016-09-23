<?php
session_start();
include('config/config.php');
include('model/fonctions.fn.php');




if ($chiffe = 0 && $chiffre = 50)
if ($chiffre == true){
	echo('Bravo ! vous venez de remporter une canette de Monster Energy Drinks');

}elseif ($chiffre = 50 && $chiffre = 60) {
	echo "Bravo ! vous venez de remporter une Porsche Cayenne !!";
} elseif ($chiffre = 65 && $chiffre = 70) {
	echo "Bravo ! vous venez de remporter un Airbus A380 !!!!";
} else {
	echo "Dommage... Vous n'avez rien gagné ! Retentez votre chance lors du prochain tirage au sort ! ";
}





