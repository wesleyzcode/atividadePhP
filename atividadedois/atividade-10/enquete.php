<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Enquete de Série Favorita</title>
</head>
<body>
    <h1>Qual a sua série favorita?</h1>
    <form action="votar.php" method="POST">
        <input type="radio" name="serie" value="Breaking Bad" required> Breaking Bad<br>
        <input type="radio" name="serie" value="Game of Thrones"> Game of Thrones<br>
        <input type="radio" name="serie" value="Stranger Things"> Stranger Things<br>
        <input type="radio" name="serie" value="La Casa de Papel"> La Casa de Papel<br><br>

        <button type="submit">Votar</button>
    </form>
</body>
</html>
