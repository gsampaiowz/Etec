<?php

    $soma = ($valor1 = 4) + 5;

    $valor2 = 20;
    $valor3 = 30;

    $soma += 1;
    $soma += $valor2;
    $soma *= $valor3;
    $soma %= 100;

    $saudacao = "Bom";
    $saudacao .= " Dia!";
    
    echo "<style> *{background-color: purple;}</style>";
    echo "<h1 style='text-align: center; color: yellow; font-family: times new roman; margin-top:15%;' >";
    echo $saudacao . "<br /n\>" ." Hoje vai ter " . $soma . "% tristeza!";

?>