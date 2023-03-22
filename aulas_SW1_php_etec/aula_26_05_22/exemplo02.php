<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
    <style>
        body{
            color: aliceblue;
            background-color: royalblue;
            text-align: center;
            margin-top: 250px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
        }
        p{
            color: orange;
        }
    </style>
</head>
<body>
    <?php
        $vetor = [2,13,56,9,4,10];
        function somaVetor($x){
            $total = 0;
            for($i = 0; $i < count($x); $i++){
                echo $i+1 ."º número = $x[$i] <br>";
                $total += $x[$i]; 
            }
            echo "<hr> A soma final é: $total"; 
        }
        somaVetor($vetor)
    ?>
</body>
</html>

