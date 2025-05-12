<?php
session_start();

// Inicializa os resultados se ainda não existir
if (!isset($_SESSION['votos'])) {
    $_SESSION['votos'] = [
        'Matrix' => 0,
        'Interestelar' => 0,
        'Inception' => 0,
        'Clube da Luta' => 0
    ];
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['filme'])) {
    $filmeEscolhido = $_POST['filme'];

    // Incrementa o voto
    if (isset($_SESSION['votos'][$filmeEscolhido])) {
        $_SESSION['votos'][$filmeEscolhido]++;
    }
} else {
    // Se acessar sem votar, volta para a enquete
    header('Location: enquete.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Enquete</title>
</head>
<body>
    <h1>Obrigado pelo seu voto!</h1>
    <p>Você votou em: <strong><?= htmlspecialchars($filmeEscolhido); ?></strong></p>

    <h2>Resultados Parciais:</h2>
    <ul>
        <?php foreach ($_SESSION['votos'] as $filme => $votos): ?>
            <li><strong><?= htmlspecialchars($filme); ?>:</strong> <?= $votos; ?> voto(s)</li>
        <?php endforeach; ?>
    </ul>

    <a href="enquete.html">Votar novamente</a>
</body>
</html>
