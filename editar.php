<?php
require_once 'config/config.php';

$id = $_GET['id'];
$dados = $pdo->query("SELECT * FROM clientes WHERE id = $id");
$cliente = $dados->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE clientes SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = $id";
    $pdo->exec($sql);
    
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Editar Cliente</h2>
    
    <form action="editar.php?id=<?php echo $id; ?>" method="POST">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" value="<?php echo $cliente['nome']; ?>" required>
        </div>
        
        <div class="form-group">
            <label>E-mail:</label>
            <input type="email" name="email" class="form-control" value="<?php echo $cliente['email']; ?>" required>
        </div>
        
        <div class="form-group">
            <label>Telefone:</label>
            <input type="text" name="telefone" class="form-control" value="<?php echo $cliente['telefone']; ?>" required>
        </div>
        
        <button type="submit" class="btn btn-warning">Salvar Alterações</button>
        <a href="index.php" class="btn btn-default">Cancelar</a>
    </form>
</div>

</body>
</html>