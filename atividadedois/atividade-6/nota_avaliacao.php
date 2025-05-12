<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $productName = htmlspecialchars($_POST['product_name']);
    $rating = intval($_POST['rating']);
    $comments = htmlspecialchars($_POST['comments']);

    // Exibe os dados recebidos em ordem trocada
    echo "<h1>Feedback Recebido</h1>";
    echo "<p><strong>Comentários:</strong> $comments</p>";
    echo "<p><strong>Avaliação:</strong> $rating Estrela(s)</p>";
    echo "<p><strong>Nome do Produto:</strong> $productName</p>";
} else {
    // Redireciona para o formulário se o acesso não for via POST
    header('Location: avaliacao.php');
    exit;
}
?>
