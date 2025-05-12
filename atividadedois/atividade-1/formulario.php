<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuário</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eef2f3;
      padding: 30px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    form {
      background-color: #fff;
      max-width: 400px;
      margin: 0 auto;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      margin-top: 20px;
      background-color: #007BFF;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <h2>Cadastro de Usuário</h2>
  <form action="formulario_respostasa.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" min="0" required>

    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>