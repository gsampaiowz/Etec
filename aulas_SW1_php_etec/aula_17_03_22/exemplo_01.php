<?php

    echo "<link rel='stylesheet' href='style.css'>";

    $nota = 5.5;

    //Deseja-se imprimir APROVADO se a nota do aluno for maior que 5 ou REPROVADO se for menor que 5 

    if ($nota>5){
        //comandos SE verdadeiro
        echo "APROVADO";
    }
    else{
        //comandos SE falso
        echo "REPROVADO";
    }

?>