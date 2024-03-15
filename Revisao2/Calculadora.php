<?php
include 'Operacoes.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'soma':
            $resultado = adicao($num1, $num2);
            break;
        case 'subtracao':
            $resultado = subtracao($num1, $num2);
            break;
        case 'multiplicacao':
            $resultado = multiplicacao($num1, $num2);
            break;
        case 'divisao':
            $resultado = divisao($num1, $num2);
            break;
        default:
            $resultado = "Operação inválida";
            break;
    }

    // Exibe o resultado na tela
    echo "<h2>Resultado:</h2>";
    echo "O resultado da operação $operacao entre $num1 e $num2 é: $resultado";
}
?>
