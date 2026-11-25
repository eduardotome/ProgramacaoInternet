<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String</title>
</head>
<body>
<form action="">
    <label>Digite um texto:</label>
    <input name="texto" type="text">
    <input type="submit">
</form>

    <?php
    if(isset($_GET['texto'])){
        $texto = strtolower($_GET['texto']);
        $semEspaco = str_replace(" ", "", $texto);

        echo "Tamanho: " . strlen($texto) . "<br>";

        if($semEspaco == strrev($semEspaco)){
            echo "É palindromo<br>";
        }else{
            echo "Não é palindromo<br>";
        }

        $vogais = 0;
        $consoantes = 0;
        for($i = 0; $i < strlen($semEspaco); $i++){
            $letra = $semEspaco[$i];
            if($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
                $vogais++;
            }else if($letra >= "a" && $letra <= "z"){
                $consoantes++;
            }
        }
        echo "Vogais: $vogais <br>";
        echo "Consoantes: $consoantes";
    }
    ?>
</body>
</html>
