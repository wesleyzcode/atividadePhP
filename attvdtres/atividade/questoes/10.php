<h1>Atividade 10</h1>
<p>Escreva um código que conte e exiba a quantidade de vogais em uma frase fornecida pelo usuário.</p>
<form action="" method="post">
    <label for="frase">Digite uma frase:</label>
    <input type="text" name="frase">
    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = $_POST['frase'];
    $quantidade = preg_match_all("/[aeiouAEIOU]/", $frase);
    echo "<br> A frase contém $quantidade vogais.";
}

?>