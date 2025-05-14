<h1>Verificador de Palíndromos</h1>
<p>Digite uma palavra para saber se ela é um palíndromo (lê-se igual de trás para frente).</p>
<form action="" method="post">
    <label for="palavra">Palavra:</label>
    <input type="text" name="palavra" id="palavra">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = mb_strtolower($_POST['palavra'], 'UTF-8');
    if ($palavra == strrev($palavra)) {
        echo "A palavra \"$palavra\" é um palíndromo!";
    } else {
        echo "A palavra \"$palavra\" não é um palíndromo.";
    }
}
?>