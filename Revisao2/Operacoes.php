<?php

function adicao($num1, $num2) {
    return $num1 + $num2;
}

function subtracao($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacao($num1, $num2) {
    return $num1 * $num2;
}

function divisao($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Divisão por zero não é permitida.";
    }
}

echo "<h2>Resultados das operações:</h2>";
echo "A. Somar 5 e 2: " . adicao(5, 2) . "<br>";
echo "B. Subtrair 10 e 8: " . subtracao(10, 8) . "<br>";
echo "C. Multiplicar 7 e 4: " . multiplicacao(7, 4) . "<br>";
echo "D. Dividir 6 e 3: " . divisao(6, 3) . "<br>";
?>
