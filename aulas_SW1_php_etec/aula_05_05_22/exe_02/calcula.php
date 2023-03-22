<?php
    echo "<style>
    body{
        background-color: blanchedalmond;
        text-align: center;
        margin-top: 400px;
        font-family: monospace;
        font-size: 20px;
    }
</style>";
    $numero = $_POST['num'];
    $cubo = pow($numero,3);
    for($cont=$numero;$cont<=$cubo;$cont++){
        $resto = ($cont % 2);
        if($resto == 1){
            echo "$cont <br>";
        }
        //echo "$resto <br>";
    };
?>