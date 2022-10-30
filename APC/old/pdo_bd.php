<?php


try {
    $mysqli = new PDO('mysql:host=127.0.0.1;dbname=prix;charset=utf8', 'uni', 'password'
    ,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {

    die('Erreur : ' . $e->getMessage());
}


 ?>
