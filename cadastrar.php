<?php 
require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    $pdo->exec($sql);
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <h2>Novo Cliente</h2>
    
    <form action="cadastrar.php" method="POST">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>E-mail:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>Telefone:</label>
            <input type="text" name="telefone" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="index.php" class="btn btn-default">Cancelar</a>
    </form>
</div>
</body>
</html>