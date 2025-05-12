<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Quiz Online</title>
</head>
<body>
    <h1>Quiz de Conhecimentos Gerais</h1>
    <form action="corrigir.php" method="POST">

        <h3>1. Qual é o menor continente do mundo?</h3>
        <input type="radio" name="q1" value="a" required> África<br>
        <input type="radio" name="q1" value="b"> Oceania<br>
        <input type="radio" name="q1" value="c"> Europa<br><br>

        <h3>2. Quem pintou a Mona Lisa?</h3>
        <input type="radio" name="q2" value="a" required> Leonardo da Vinci<br>
        <input type="radio" name="q2" value="b"> Pablo Picasso<br>
        <input type="radio" name="q2" value="c"> Vincent van Gogh<br><br>

        <h3>3. Qual é o elemento químico representado pelo símbolo 'O'?</h3>
        <input type="radio" name="q3" value="a" required> Ouro<br>
        <input type="radio" name="q3" value="b"> Oxigênio<br>
        <input type="radio" name="q3" value="c"> Prata<br><br>

        <button type="submit">Enviar Respostas</button>
    </form>
</body>
</html>
