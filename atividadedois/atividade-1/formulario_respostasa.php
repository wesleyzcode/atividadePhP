<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        #form{
            background-color:red;
        }
        h1 {
            color:rgb(2, 53, 3);
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        a {
            color:rgb(0, 46, 2);
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $idade = htmlspecialchars($_POST['idade']);
?>
    <h1>Cadastro Realizado com Sucesso</h1>
    <div id='form'>
        <p>Idade: <?php echo $idade; ?></p><br>
        <p>Nome: <?php echo $nome; ?></p><br>
        <p>Email: <?php echo $email; ?></p><br>
        <p>Obrigado por se cadastrar!</p><br>
        <p><a href="formulario.php">Voltar ao formulário</a></p><br>
    </div>
<?php
}else{
?>
    Acesso Invalido
<?php
}
?>
</body>
</html>
