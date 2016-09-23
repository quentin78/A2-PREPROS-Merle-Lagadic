<?php


function Inscription(PDO $db, $username, $email, $chiffre){
    

    try{ $sql = 'INSERT INTO user (username, email, chiffre)
            VALUES ("'.$username.'", "'.$email.'", "'.$chiffre.'")';


    $req = $db->prepare($sql);
    $req->execute();
       return true;
}catch(Exception $e){
    die($e->getMessage());
}
}




function chiffre(PDO $db, $id ){
    $sql='SELECT FROM user
          WHERE chiffre = '.$chiffre;

    $req= $db->prepare($sql);
     $req->execute();
     return $chiffreperso;

}
