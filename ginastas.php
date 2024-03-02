<!DOCTYPE html>
<html>
<head>
    <title>Sorteio e verificação de divisibilidade por 7</title>
</head>
<body>

<?php

    $ginastas[0]["nome"] = "Jade";
    $ginastas[0]["nota"] = 12.95;
    $ginastas[0]["pais"] = "Brasil";
    $ginastas[1]["nome"] = "Shawn";
    $ginastas[1]["nota"] = 13.50;
    $ginastas[1]["pais"] = "EUA";
    $ginastas[2]["nome"] = "Daiane";
    $ginastas[2]["nota"] = 14.35;
    $ginastas[2]["pais"] = "Brasil";
    $ginastas[3]["nome"] = "Nadia";
    $ginastas[3]["nota"] = 12.90;
    $ginastas[3]["pais"] = "Romênia";






    function converte($numero) {
        $li = ($numero - 32) / 1.8;
        round($li);
        return "<p>Fahrenheit: $numero em Celsius é: $li</p>";
    }


    echo converte(90);
    echo converte(77);
    echo converte(52);
    echo converte(12);

?>

</body>
</html>
