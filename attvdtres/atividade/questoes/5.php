<h1>Atividade 5</h1>
<p>Crie um programa que conte e mostre quantos números pares e ímpares existem em um intervalo escolhido pelo usuário.</p>
<form action="" method="post">
    <label for="n1">Digite o número inicial:</label>
    <input type="number" name="n1" id="n1" required>
    <label for="n2">Digite o número final:</label>
    <input type="number" name="n2" id="n2" required>
    <input type="submit" value="Calcular">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inicio = intval($_POST['n1']);
    $fim = intval($_POST['n2']);

    $pares = 0;
    $impares = 0;

    for ($i = $inicio; $i <= $fim; $i++) {
        if ($i % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    echo "Total de números pares: $pares <br> Total de números ímpares: $impares";
}
?>
