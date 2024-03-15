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

// A. Mostrar a lista com o nome de todas as ginastas
echo "<h2>Lista de Ginastas:</h2>";
foreach ($ginastas as $ginasta) {
    echo $ginasta["nome"] . "<br>";
}

// B. Mostrar a média de notas
$total_notas = 0;
foreach ($ginastas as $ginasta) {
    $total_notas += $ginasta["nota"];
}
$media_notas = $total_notas / count($ginastas);
echo "<h2>Média de Notas: $media_notas</h2>";

// C. Mostrar a lista com o nome das ginastas com nota acima de 13
echo "<h2>Ginastas com nota acima de 13:</h2>";
foreach ($ginastas as $ginasta) {
    if ($ginasta["nota"] > 13) {
        echo $ginasta["nome"] . "<br>";
    }
}

// D. Mostrar o nome da ginasta com a nota mais alta
$maior_nota = 0;
$nome_maior_nota = "";
foreach ($ginastas as $ginasta) {
    if ($ginasta["nota"] > $maior_nota) {
        $maior_nota = $ginasta["nota"];
        $nome_maior_nota = $ginasta["nome"];
    }
}
echo "<h2>Ginasta com a nota mais alta: $nome_maior_nota ($maior_nota)</h2>";
?>