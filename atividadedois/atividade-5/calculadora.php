<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="POST" action="resultado.php">
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        
        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="divisao">Divisão</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="subtracao">Subtração</option>
            <option value="adicao">Adição</option>
        </select>
        <br><br>
        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
