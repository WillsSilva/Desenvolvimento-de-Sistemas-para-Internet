<!DOCTYPE html>
<html>

<head>
    <title>Saudações do dia</title>
    <style>
        .green {
            color: green;
        }

        .red {
            color: red;
        }

        .blue {
            color: blue;
        }
    </style>
</head>

<body>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    
    $hora_atual = date('H'); 
    
    if ($hora_atual >= 6 && $hora_atual < 12) {
        echo '<p class="green">Bom dia!</p>';
    } elseif ($hora_atual >= 12 && $hora_atual < 18) {
        echo '<p class="red">Boa tarde!</p>';
    } else {
        echo '<p class="blue">Boa noite!</p>';
    }
?>
</body>

</html>
