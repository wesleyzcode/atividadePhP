<h1>Atividade 3</h1>
<p>Crie um programa que verifica se uma pessoa é maior de idade, menor de idade ou idosa com base em sua idade.</p>
<form action="" method="post">
    <label for="idade">Insira a idade:</label>
    <input type="number" name="idade" min="0">
    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST['idade'];
    if ($idade >= 60) {
        $resultado = "Idosa";
    } elseif ($idade >= 18) {
        $resultado = "Maior de idade";
    } else {
        $resultado = "Menor de idade";
    }
    echo "<br> A pessoa é: $resultado";
}

?>