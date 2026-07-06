<?php 

$host = 'localhost';
$banco = 'crud';
$usuario = 'root';
$senha = '';


$pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);

?>