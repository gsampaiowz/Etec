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
    for($cont=1;$cont<=10;$cont++){
        $res = $numero*$cont;
        echo "$numero * $cont = $res <br>";
        
    }
?>