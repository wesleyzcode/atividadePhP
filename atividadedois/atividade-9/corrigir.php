<?php
// Novo gabarito das questões
$gabarito = [
    'q1' => 'a', // Rio de Janeiro
    'q2' => 'c', // Saturno
    'q3' => 'a', // William 
];

$pontuacao = 0;

// Corrige cada resposta
foreach ($gabarito as $pergunta => $resposta_correta) {
    if (isset($_POST[$pergunta]) && $_POST[$pergunta] === $resposta_correta) {
        $pontuacao++;
    }
}

$total_perguntas = count($gabarito);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Quiz</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>Você acertou <strong><?= $pontuacao; ?></strong> de <strong><?= $total_perguntas; ?></strong> perguntas.</p>

    <?php if ($pontuacao == $total_perguntas): ?>
        <p><strong>Parabéns! Você acertou tudo!</strong></p>
    <?php elseif ($pontuacao >= ($total_perguntas / 2)): ?>
        <p><strong>Bom trabalho! Mas ainda dá pra melhorar!</strong></p>
    <?php else: ?>
        <p><strong>Que tal tentar novamente?</strong></p>
    <?php endif; ?>

    <a href="quiz.html">Refazer o Quiz</a>
</body>
</html>
