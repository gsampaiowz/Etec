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
    //echo $numero;
    $cubo = pow($numero,3);
    //echo $cubo;
    for($cont=$numero;$cont<=$cubo;$cont++){
        echo "$cont <br>";
    };
?>