<h1>Atividade 15</h1>
<p>Utilize um loop while para calcular e exibir a soma dos números pares de 1 a 10.</p>

<?php
$numero = 1;
$soma = 0;

while ($numero <= 10) {
    if ($numero % 2 == 0) {
        $soma += $numero;
    }
    $numero++;
}

echo "A soma dos números pares de 1 a 10 é: $soma";
?>