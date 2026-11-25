<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triangulo</title>
</head>
<body>
<form action="">
    <label>Lado A:</label>
    <input name="a" type="number">
    <label>Lado B:</label>
    <input name="b" type="number">
    <label>Lado C:</label>
    <input name="c" type="number">
    <input type="submit">
</form>

    <?php
    if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];

        if($a + $b > $c && $a + $c > $b && $b + $c > $a){
            if($a == $b && $b == $c){
                echo "Triangulo Equilatero";
            }else if($a == $b || $a == $c || $b == $c){
                echo "Triangulo Isosceles";
            }else{
                echo "Triangulo Escaleno";
            }
        }else{
            echo "Esses lados nao formam um triangulo";
        }

    }
    ?>
</body>
</html>
