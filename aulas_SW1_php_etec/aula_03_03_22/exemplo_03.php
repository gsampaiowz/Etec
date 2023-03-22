<?php

    //OPERADORES DE COMPARAÇÃO

    $a = "10";
    $b = 10;
    $soma = $a + $b;

    echo "<style> *{background-color: purple;}</style>";
    echo "<h1 style='text-align: center; color: yellow; font-family: times new roman; margin-top:15%;' >";
    echo "Somando a + b => ". $soma . "<br>";
    echo "Usando ==: " . ($a == $b) . "<br>";
    echo "Usando ===: " . ($a === $b) . "<br>";

    echo 'Variável $a é: ';
    var_dump($a) ;
    echo "<br>";
    echo 'Variável $b é: '; 
    var_dump($b);

?>