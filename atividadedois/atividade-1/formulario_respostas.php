<?php
$nome = ($_POST['nome']);
$email = ($_POST['email']);
$idade_num = ($_POST['idade']); // guardamos a idade numérica

// Verifica se é menor ou maior de idade e define a cor
if ($idade_num < 18) {
    $idade_status = "Menor de idade";
    $cor = "red";
} else {
    $idade_status = "Maior de idade";
    $cor = "green";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <p style="color: <?= $cor ?>;">
        Nome: <?= htmlspecialchars($nome) ?>, Email: <?= htmlspecialchars($email) ?>, <?= $idade_status ?>
    </p>
</body>
</html>
