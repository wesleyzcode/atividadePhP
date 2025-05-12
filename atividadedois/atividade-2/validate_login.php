<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="validate_login.php" method="POST">
    <label for="username">Usuário:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" value="Enviar">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validUsername = 'usuario';
    $validPassword = 'senha123';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $validUsername && $password === $validPassword) {
        echo "<h1>Login feito com sucesso. Bem-vindo, $username!</h1>";
    } else {
        echo "Erro: Nome ou senha inválidos.";
    }
}
?>

</body>
</html>
