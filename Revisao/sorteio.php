<!DOCTYPE html>
<html>
<head>
    <title>Sorteio e verificação de divisibilidade por 7</title>
</head>
<body>

<?php

    function gerarNumeroAleatorio() {
        return rand(1, 15);
    }


    function divisivelPorSete($numero) {
        return $numero % 7 == 0;
    }

    $numeroSorteado = gerarNumeroAleatorio();
    echo "<p>Número sorteado inicialmente: $numeroSorteado</p>";

    for ($i = $numeroSorteado; $i <= $numeroSorteado * 3; $i++) {
        if (divisivelPorSete($i)) {
            echo "<p>Número divisível por 7 encontrado: $i</p>";
            break;
        }
        echo "<p>$i não é divisível por 7</p>";
    }
?>

</body>
</html>
