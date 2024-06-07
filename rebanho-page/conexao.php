<?php

$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$dbname = 'ordermik'; 

$mysqli = new mysqli($host, $user, $password, $dbname);

if ($mysqli->connect_error) {
    die('Erro de Conexão (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$mysqli->set_charset("utf8");
?>
