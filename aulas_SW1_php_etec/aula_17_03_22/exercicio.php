<?php

    echo "<link rel='stylesheet' href='style.css'>";

    //PESSOA 1 - 17 ANOS - POSSUI HABILITAÇÃO
    //PESSOA 2 - 20 ANOS - POSSUI HABILITAÇÃO
    //PESSOA 3 - 18 ANOS - NÃO POSSUI HABILITAÇÃO
    //PESSOA 4 - 15 ANOS - NÃO POSSUI HABILITAÇÃO

    $pessoa1 = 17;
    $pessoa2 = 20;
    $pessoa3 = 18;
    $pessoa4 = 15;
    $hab1 = true;
    $hab2 = true;
    $hab3 = false;
    $hab4 = false;

    if($pessoa1>=18 and $hab1==true){
        echo "PESSOA 1 PODE DIRIGIR POIS POSSUI OS REQUISITOS.<br>";
    }
    else{
        echo "PESSOA 1 NÃO PODE DIRIGIR POIS NÃO POSSUI OS REQUISITOS.<br>";
    }
    if($pessoa2>=18 and $hab2==true){
        echo "PESSOA 2 PODE DIRIGIR POIS POSSUI OS REQUISITOS.<br>";
    }
    else{
        echo "PESSOA 2 NÃO PODE DIRIGIR POIS NÃO POSSUI OS REQUISITOS.<br>";
    }
    if($pessoa3>=18 and $hab3==true){
        echo "PESSOA 3 PODE DIRIGIR POIS POSSUI OS REQUISITOS.<br>";
    }
    else{
        echo "PESSOA 3 NÃO PODE DIRIGIR POIS NÃO POSSUI OS REQUISITOS.<br>";
    }
    if($pessoa4>=18 and $hab4==true){
        echo "PESSOA 4 PODE DIRIGIR POIS POSSUI OS REQUISITOS.<br>";
    }
    else{
        echo "PESSOA 4 NÃO PODE DIRIGIR POIS NÃO POSSUI OS REQUISITOS.<br>";
    }

?>