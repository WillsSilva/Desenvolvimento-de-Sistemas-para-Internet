<!DOCTYPE html>
<html>
<head>
    <title>Sorteio e verificação de divisibilidade por 7</title>
</head>
<body>

<?php

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
