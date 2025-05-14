<h1>Atividade 13</h1>
<p>Utilize a estrutura foreach para calcular a média de valores em um array.</p>

<?php
$numeros = [10, 20, 30, 40, 50];
$soma = 0;

foreach ($numeros as $value){ 
     $soma += $value;
};

$media = $soma / count($numeros);

echo $media;
?>