<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
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

        for($x = 0; $x < 10; $x++){
            $num = rand(1, 100);
            $vetor[$x] = $num;
        }

        $cont = count($vetor);
        $total = 0;

        echo "Os números do seu vetor são: <br>";

        for($i = 0; $i < $cont;  $i++){
            echo "$vetor[$i] <br>";
            $total += $vetor[$i];
        };

        $media = $total / $cont;

        echo "<hr> A média desses números é: $media";

    ?>
</body>
</html>

