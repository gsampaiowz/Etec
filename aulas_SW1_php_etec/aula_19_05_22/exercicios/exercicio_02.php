<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <style>
        body{
            color: aliceblue;
            background-color: royalblue;
            text-align: center;
            margin-top: 250px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php

        $vetor = [];

        for($x = 0; $x < 6; $x++){
            $num = rand(1,10);
            $vetor [$x] = $num;
        };

        $result = count($vetor);

        for($i = 1; $i < $result; $i++){
            echo $i."º Número aleatório: $vetor[$i] <br>";   
        };

    ?>
</body>
</html>

