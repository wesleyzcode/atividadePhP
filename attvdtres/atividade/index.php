<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de Programação</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
            background: #fff;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 30px;
        }

        header, footer {
            background: #1976d2;
            color: #fff;
            text-align: center;
            padding: 25px 0;
            letter-spacing: 1px;
        }

        a {
            color: #1976d2;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <div class="content">
        <?php
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'default';
        $pagePath = "questoes/{$pagina}.php";

        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            echo "<br> Página não encontrada.";
        }
        ?>
        <br><br>
        <a href="index.php">Voltar a busca.</a>
    </div>

    <?php include "footer.php"; ?>

</body>

</html>