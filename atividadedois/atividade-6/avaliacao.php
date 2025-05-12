<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação de Serviços</title>
</head>
<body>
    <h1>Avaliação de Serviços</h1>
    <form action="process_feedback.php" method="POST">
        <label for="service_name">Nome do Serviço:</label><br>
        <input type="text" id="service_name" name="service_name" required><br><br>

        <label for="satisfaction">Satisfação (1 a 5):</label><br>
        <select id="satisfaction" name="satisfaction" required>
            <option value="1">1 - Muito Insatisfeito</option>
            <option value="2">2 - Insatisfeito</option>
            <option value="3">3 - Neutro</option>
            <option value="4">4 - Satisfeito</option>
            <option value="5">5 - Muito Satisfeito</option>
        </select><br><br>

        <label for="observations">Observações:</label><br>
        <textarea id="observations" name="observations" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Enviar Avaliação</button>
    </form>
</body>
</html>