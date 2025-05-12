<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Confirmação de Inscrição</title>
</head>
<body>
    <a href="newsletter.html">Voltar</a>
    <h1>Inscrição realizada com sucesso!</h1>
    <p>Parabéns! Seu endereço de email <strong><?= $email; ?></strong> foi inscrito em nossa newsletter.</p>
</body>
</html>
<?php
} else {
    header('Location: newsletter.html');
    exit();
}
?>
