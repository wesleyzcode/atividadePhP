<h1>Tabuada Personalizada</h1>
<p>Digite um número para ver a tabuada desse valor.</p>
<form action="" method="post">
    <label for="numero">Número:</label>
    <input type="number" name="numero" id="numero" required>
    <input type="submit" value="Calcular">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
    echo "<h2>Tabuada do $numero</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }
    echo "</ul>";
}

?>