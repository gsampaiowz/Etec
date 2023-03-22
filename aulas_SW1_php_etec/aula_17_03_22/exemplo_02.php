<?php

    echo "<link rel='stylesheet' href='style.css'>";

    $nota = 5.5;

    //APROVADO SE NOTA >6 - OK
    //REPROVADO SE NOTA <5 - OK
    //RECUPERAÇÃP SE NOTA ENTRE 5 E 6 - OK

    if($nota>6){
        //comandos SE verdadeiro
        echo "APROVADO";
    }
    elseif($nota<5){
        echo "REPROVADO";
    }
    else{
        //comandos SE falso
        echo "RECUPERAÇÃO";
    }

?>