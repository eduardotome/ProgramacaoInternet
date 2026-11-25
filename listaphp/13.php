<?php
    $numeros = [5, 12, 3, 8, 20, 1];

    $soma = 0;
    $maior = $numeros[0];
    $menor = $numeros[0];

    foreach($numeros as $n){
        $soma = $soma + $n;
        if($n > $maior){
            $maior = $n;
        }
        if($n < $menor){
            $menor = $n;
        }
    }

    echo "Soma: $soma <br>";
    echo "Maior: $maior <br>";
    echo "Menor: $menor";
    ?>
