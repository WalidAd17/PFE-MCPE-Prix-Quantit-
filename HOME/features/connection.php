<?php

$base=mysql_connect('localhost','root','') or die("erreur de connexion");

mysql_select_db('prix',$base);

 mysql_query("SET NAMES 'utf8'");

 ?>