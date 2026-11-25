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
<input type="submit">
</form>
    <?php
    function ePar($n){
        if($n % 2 == 0){
            echo "é par";
        }else{
            echo "é impar";
        }
    }
    if(isset($_GET['num'])){
        $numero = $_GET['num'];
        echo "O numero $numero ";
        ePar($numero);
    }
    ?>
</body>
</html>
