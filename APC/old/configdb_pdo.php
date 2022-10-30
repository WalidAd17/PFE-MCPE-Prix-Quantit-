<?php

//$base=mysqli_connect('localhost','root','') or die("erreur de connexion");

//mysqli_select_db('prix',$base);
//$mysqli = new mysqli("localhost", "root", "", "prix");

// mysqli_query("SET NAMES 'utf8'");
try {
    $mysqli = new PDO('mysql:host=127.0.0.1;dbname=prix;charset=utf8', 'uni', 'password'
    ,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {

    die('Erreur : ' . $e->getMessage());
}
//array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) cette code permet d'afficher les erreur plus clair

 ?>
