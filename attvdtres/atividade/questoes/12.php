<h1>Atividade 12</h1>
<p>Percorra um array associativo utilizando a estrutura foreach e exiba tanto as chaves quanto os valores.</p>

<?php
$aluno = [
    "nome" => "Guilherme",
    "idade" => 19,
    "curso" => "Aprendiz de Programação Web",
];

foreach ($aluno as $chave => $valor) {
    echo "Chave: $chave - Valor: $valor<br>";
}
?>
