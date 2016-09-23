<?php
session_start();
include('config/config.php');
include('model/fonctions.fn.php');

$inscription = Inscription($db, $_POST['username'], $_POST['email'], $_POST['chiffre']);

if ($inscription == true){
	header('Location: valider.php');

}else {
	header('Location: inscription.php');
}
