<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email === 'marcuszuim@inexxus.digital' && $senha === '123456') {
        header('location:index.php');
        exit;
    } else {
        $_SESSION['erro'] = "Email ou senha incorreta";
        header ('Location: login.php');
        exit;
    }
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<?php if (isset($_SESSION['erro'])): ?>
    <div class="alert alert-danger" style="margin: 15px 0; padding: 10px; color: #a94442; background-color: #f2dede; border: 1px solid #ebccd1; border-radius: 4px;">
        <?php 
            echo $_SESSION['erro']; 
            unset($_SESSION['erro']); 
        ?>
    </div>
<?php endif; ?>
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