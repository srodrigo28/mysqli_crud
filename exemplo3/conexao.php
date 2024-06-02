<?php

$host = "localhost";
$db = "crud-mysqli";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $db);
if($mysqli->connect_errno){
    die("Falha na conexao com o banco de dados");
}