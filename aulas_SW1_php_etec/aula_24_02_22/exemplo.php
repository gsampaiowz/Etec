<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body>
    <h1 class="title2"><?php

    $nome = "Sampaio";

    $Sampaio = "Vasco";

    echo $$nome;
    echo "<br>";

    $numero = 10;
    
    $outro_numero = "10";

    echo "numero é igual a: "; var_dump($numero);
    echo "<br>";
    echo "outro numero é igual a: "; var_dump($outro_numero);
    echo "<hr>";

    if($numero == $outro_numero){
        echo "Valores iguais";
    }
    else{
        echo "Valores diferente";
    }

    echo "<hr>";

    if($numero === $outro_numero){
        echo "Valores e tipo iguais ";
    }
    else{
        echo "Valores ou tipo diferente";
    }
?></h1>
</body>
</html>

