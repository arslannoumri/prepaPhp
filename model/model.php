<?php

function connectDB() {
try {
$bdd = new PDO('mysql:host=localhost:3306;dbname=livre_e2c;charset=utf8','root', 'root');

} catch(exeption $e) 
{
  die('erreur : '.$e->getMessage());
}

return $bdd;

}

function getBooksList($bdd){
$sqlQuery = "SELECT * FROM principal";
$logstatement = $bdd -> prepare($sqlQuery);
$logstatement -> execute();
$req = $logstatement -> fetchall();

    return $req;
}


?>