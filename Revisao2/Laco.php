<!DOCTYPE html>
<html>
<head>
    <title>Múltiplos de 3</title>
</head>
<body>
    <h2>Múltiplos de 3 de 1 a 100:</h2>
    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
