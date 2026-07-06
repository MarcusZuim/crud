<?php 
require_once 'config/config.php';

$sql = "SELECT * FROM clientes";
$dados = $pdo->query($sql);
$clientes = $dados->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADMIN - Sistema CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">
    <h2>Lista de Clientes</h2>
    <a href="cadastrar.php" class="btn btn-success" style="margin-bottom: 20px;">Novo Cliente</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $clientes): ?>
            <tr>
                <td><?php echo $clientes['id'];?></td>
                <td><?php echo $clientes['nome']?></td>
                <td><?php echo $clientes['email']?></td>
                <td><?php echo $clientes['telefone']?></td>
            <td>
                <a href="editar.php?id=<?php echo $clientes['id']; ?>" class="btn btn-xs btn-warning">Editar</a>
                <a href="excluir.php?id=<?php echo $clientes['id']; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Tem certeza que deseja excluir este cliente?');">Excluir</a>
            </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>