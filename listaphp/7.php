<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form method="GET">
        <label>Digite um número:</label>
        <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado <br>";
        }
    }
    ?>
</body>
</html>