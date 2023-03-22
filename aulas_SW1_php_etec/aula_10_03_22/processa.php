<?php

    // CSS
    echo "<style> *{background-color: purple;}</style>";
    echo "<h1 style='text-align: center; color: orange; font-family: monospace; margin-top: 20%;' >";

    //$num1 = 5;
    //$num2 = 10;

    //PSEUDOVARIAVEL (SUPER VARIAVEL)
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    $soma = $num1 + $num2;

    //echo "A soma de ". $num1 ." + ". $num2 ." é igual a ". $soma ."<br>";
    
    echo "A soma de $num1 +  $num2 é igual a $soma <br>";

    //echo 'A soma de $num1 +  $num2 é igual a $soma <br>';


?>