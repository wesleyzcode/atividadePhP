<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Pesquisa</title>
</head>
<body>
    <?php
    if (isset($_GET['termo'])) {
        $termo = htmlspecialchars($_GET['termo']);
        echo "<h1>Resultado da Pesquisa</h1>";
        echo "<p>Você pesquisou pelo termo: <strong>$termo</strong></p>";
    } else {
        echo "<h1>Nenhum termo de pesquisa foi fornecido.</h1>";
    }
    ?>
</body>
</html>