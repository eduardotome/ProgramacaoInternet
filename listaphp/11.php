<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intervalo</title>
    <style>
        .numero{
            color: white;
            background-color: blue;
            padding: 5px;
            margin: 2px;
        }
    </style>
</head>
<body>
<form action="">
    <label>Inicio:</label>
    <input name="inicio" type="number">
    <label>Fim:</label>
    <input name="fim"type="number">
    <input type="submit">
</form>

    <?php
    if(isset($_GET['inicio']) && isset ($_GET['fim'])){
        for($i = $_GET['inicio']; $i <= $_GET['fim']; $i++){
            echo "<span class='numero'>$i</span>";
        }
    }
    ?>
</body>
</html>
