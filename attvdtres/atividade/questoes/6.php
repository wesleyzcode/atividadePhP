<h1>Atividade 6</h1>
<p>Escreva um código que calcule e exiba a soma dos números de 1 a 100.</p>

<?php

$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo $soma;

?>