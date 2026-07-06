<?php 
require_once 'config/config.php';

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id = $id";

$pdo->exec($sql);
header('Location: index.php');
exit;
?>