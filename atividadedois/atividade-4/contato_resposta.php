<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Exibindo os dados enviados em ordem trocada
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Nome:</strong> $nome</p>";
} else {
    echo "<p>Por favor, envie o formulário corretamente.</p>";
}
?>
