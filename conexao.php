<?php

$host = 'localhost';
$usuario = 'root';
$senha = 'senha';
$database = 'login';


$mysqli = new mysqli($host, $usuario, $senha, $database);


if($mysqli->error) { 
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
