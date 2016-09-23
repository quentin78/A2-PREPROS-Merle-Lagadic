<?php

$host = "localhost";
$db_name = "PMU-Merle-Lagadic";
$user = "root";
$pass = "root";

try{
		$db = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}

catch(EXCEPTION $e){
	echo 'ERREUR: '.$e->getMessage().'<br>';
	echo 'N°'.$e->getCode();
}

?>