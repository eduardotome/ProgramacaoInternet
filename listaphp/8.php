<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soma</title>
</head>
<body>
<form action="">
    <label>Digite os numeros separados por virgula:</label>
    <input name="numeros" type="text">
    <input type="submit">
</form>

    <?php
    if(isset($_GET['numeros'])){
        $lista = explode(",", $_GET['numeros']);
        $soma = 0;
        foreach($lista as $n){
            if($n != ""){
            $soma = $soma + $n;
            }
        }
        echo "A soma é $soma";

    }
    ?>
</body>
</html>
