<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IMC</title>
</head>
<body>
    <form action="10_3.php" method="POST">
        <input type="hidden" name="nome" value="<?php echo $_GET['nome']; ?>">
        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
        <label>Peso (kg):</label>
        <input name="peso" type="text"><br>
        <label>Altura (m):</label>
        <input name="altura" type="text"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
