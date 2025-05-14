<h1>Atividade 2</h1>
<p>Escreva um código que determine se um número é par ou ímpar.</p>
<form action="" method="post">
    <label for="num">Insira um número:</label>
    <input type="number" name="num">
    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    $resultado = $num % 2 != 0 ? "Impar" : "Par";
    echo "<br> O número é: $resultado";
}

?>