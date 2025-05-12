<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    h1{
        text-align: center;
        margin-top: -300px;
        margin-left: 200px;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin-left: -200px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #0056b3;
    }

    .container{
        text-align: center;
    }
</style>
<body>
    <h1>Entrar no Sistema</h1>
    <div class="container">
        <form action="validate_login.php" method="POST">
            <label for="username">Nome de usuário:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <button type="submit">Acessar</button>
        </form>
    </div>
</body>
</html>
