<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email === 'matriz@inexxus.digital' && $senha === 'inexxus2013') {
        header('location:index.php');
        exit;
    } else {
        echo "Email ou senha incorretos";
    }
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <form action="login.php" method="POST">
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>
        </div>

        <button type="submit">Entrar</button>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  </body>
</html>