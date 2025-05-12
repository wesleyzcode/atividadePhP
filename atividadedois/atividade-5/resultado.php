<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];
        $resultado = null;

        // Troca os valores de $numero1 e $numero2
        $temp = $numero1;
        $numero1 = $numero2;
        $numero2 = $temp;

        switch ($operacao) {
            case 'adicao':
                $resultado = $numero1 + $numero2;
                break;
            case 'subtracao':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacao':
                $resultado = $numero1 * $numero2;
                break;
            case 'divisao':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = "Erro: Divisão por zero!";
                }
                break;
            default:
                $resultado = "Operação inválida!";
        }

        echo "<h2>Resultado: $resultado</h2>";
    }
?>