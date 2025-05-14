<h1>Atividade 1</h1>
<p>Crie um programa que verifica se um número é par ou ímpar.</p>
<form action="" method="post">
    <label for="num">Insira um número:</label>
    <input type="number" name="num">
    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    if ($num % 2 == 0) {
        $resultado = "Par";
    } else {
        $resultado = "Ímpar";
    }
    echo "<br> O número é: $resultado";
}

?>