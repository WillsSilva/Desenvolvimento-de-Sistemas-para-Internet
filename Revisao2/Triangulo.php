<!DOCTYPE html>
<html>
<head>
    <title>Verificar Tipo de Triângulo</title>
</head>
<body>
    <h2>Verificar Tipo de Triângulo</h2>
    <form method="GET">
        <label for="a">Lado A:</label>
        <input type="text" name="a"><br><br>
        
        <label for="b">Lado B:</label>
        <input type="text" name="b"><br><br>
        
        <label for="c">Lado C:</label>
        <input type="text" name="c"><br><br>
        
        <input type="submit" value="Verificar">
    </form>

    <?php

    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
        $a = floatval($_GET['a']);
        $b = floatval($_GET['b']);
        $c = floatval($_GET['c']);

        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            if ($a == $b && $b == $c) {
                echo "<p>O triângulo é equilátero (todos os lados com medidas iguais).</p>";
            } elseif ($a == $b || $a == $c || $b == $c) {
                echo "<p>O triângulo é isósceles (apenas dois dos três lados com medidas iguais).</p>";
            } else {
                echo "<p>O triângulo é escaleno (todos os lados com medidas diferentes).</p>";
            }
        } else {
            echo "<p>Os valores informados não formam um triângulo.</p>";
        }
    }
    ?>
</body>
</html>
