<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registro de Evento</title>
</head>
<body>
    <h1>Registro de Participantes</h1>
    <form action="registrar.php" method="POST">
        <label for="evento">Evento de Interesse:</label><br>
        <input type="text" id="evento" name="evento" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
