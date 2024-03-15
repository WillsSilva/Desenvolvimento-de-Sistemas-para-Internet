<?php
$dia_atual = date("j"); // Obter o dia atual

echo "<h2>Números de 1 a 31, excluindo o dia atual ($dia_atual):</h2>";

for ($i = 1; $i <= 31; $i++) {
    if ($i != $dia_atual) {
        echo $i . "<br>";
    }
}
?>