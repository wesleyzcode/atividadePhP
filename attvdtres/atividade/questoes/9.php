<h1>Atividade 9</h1>
<p>Escreva um programa que imprima os números de Fibonacci até um valor fornecido pelo usuário.</p>
<form action="" method="post">
    <label for="number">Digite um valor máximo para a sequência de Fibonacci:</label>
    <input type="number" name="number">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $resp = $_POST["number"];

    for ($i = 1; $i <= 100; $i++) {
        $soma += $i;
    }

    echo $soma;

}
?>