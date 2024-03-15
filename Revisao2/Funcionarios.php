<!DOCTYPE html>
<html>
<head>
    <title>Funcionários</title>
</head>
<body>
    <?php
    $funcionarios[0]["nome"] = "João";
    $funcionarios[0]["salario"] = 2000;
    $funcionarios[1]["nome"] = "Maria";
    $funcionarios[1]["salario"] = 2500;
    $funcionarios[2]["nome"] = "Pedro";
    $funcionarios[2]["salario"] = 1800;

    echo "<h2>Salário da Maria: {$funcionarios[1]['salario']}</h2>";

    echo "<h2>Tabela de Funcionários:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Salário</th></tr>";
    foreach ($funcionarios as $funcionario) {
        echo "<tr><td>{$funcionario['nome']}</td><td>{$funcionario['salario']}</td></tr>";
    }
    echo "</table>";

    $total_salarios = 0;
    foreach ($funcionarios as $funcionario) {
        $total_salarios += $funcionario['salario'];
    }
    $media_salarios = $total_salarios / count($funcionarios);
    echo "<h2>Média dos salários: $media_salarios</h2>";

    echo "<h2>Soma dos salários: $total_salarios</h2>";

    echo "<h2>Funcionários com salário maior ou igual à 2000:</h2>";
    foreach ($funcionarios as $funcionario) {
        if ($funcionario['salario'] >= 2000) {
            echo $funcionario['nome'] . "<br>";
        }
    }
    ?>
</body>
</html>
