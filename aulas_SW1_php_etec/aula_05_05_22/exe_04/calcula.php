<?php
    echo "<style>
    body{
        background-color: blanchedalmond;
        text-align: center;
        margin-top: 300px;
        font-family: monospace;
        font-size: 20px;
    }
</style>";
    $numero = $_POST['num'];
    $res = 1;
    for($cont=$numero;$cont>=1;$cont--){
        $res *= $cont;
        echo "$numero * $cont = $res <br>";
    }
    echo "<h1> DE CRIA </h1>"
?>