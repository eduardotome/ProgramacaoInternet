<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
<form action="">
<label for="num">Numero:</label>
<input name="num" type="number">
</form>
    <?php
    $numero = $_GET['num'];
    function ePar($n){
        if($n % 2 == 0){
            echo "é par";
        }else{
            echo "é impar";
        }
    }
    ePar($numero);
    ?>
</body>
</html>
