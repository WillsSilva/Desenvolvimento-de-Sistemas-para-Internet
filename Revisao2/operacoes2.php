<?php
function calcularBhaskara($a, $b, $c) {
    $delta = ($b * $b) - (4 * $a * $c);
    
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Duas raízes reais: x1 = $x1, x2 = $x2";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "Uma raiz real: x = $x";
    } else {
        echo "Não existem raízes reais para esta equação.";
    }
}

echo "<h2>Resultados da fórmula de Bhaskara:</h2>";
echo "<h3>Para a = 4, b = 2, c = -6:</h3>";
calcularBhaskara(4, 2, -6);
echo "<br><br>";
echo "<h3>Para a = 7, b = 3, c = 4:</h3>";
calcularBhaskara(7, 3, 4);
?>
