<?php
session_start();

if (!isset($_SESSION['participantes'])) {
    $_SESSION['participantes'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $evento = htmlspecialchars($_POST['evento']);

    $_SESSION['participantes'][] = [
        'nome' => $nome,
        'email' => $email,
        'evento' => $evento
    ];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Participantes Registrados</title>
</head>
<body>
    <h1>Participantes Registrados</h1>

    <?php if (!empty($_SESSION['participantes'])): ?>
        <ul>
            <?php foreach ($_SESSION['participantes'] as $participante): ?>
                <li>
                    <strong>Evento:</strong> <?= $participante['evento']; ?> |
                    <strong>Nome:</strong> <?= $participante['nome']; ?> |
                    <strong>Email:</strong> <?= $participante['email']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum participante registrado ainda.</p>
    <?php endif; ?>

    <a href="formulario.html">Registrar outro participante</a>
</body>
</html>
