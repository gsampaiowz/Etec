<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
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
        // Função sem retorno e sem parâmetro

        function teste(){
            echo "<p> Função sem retorno e sem parâmetro </p> Gabriel Sampaio <hr>";
        }
        teste();

        //Função sem retorno e com parâmetro
        function teste2($a){
            echo $a;
        }
        teste2("<p> Função sem retorno e com parâmetro </p> 17 Anos - ");
        teste2("16 Anos <hr>");
        
        //Função com retorno e sem parâmetro

        function teste3(){
            $b = "Sampaio";
            return $b;
        }

        $resultado = teste3();
        echo "<p> Função com retorno e sem parâmetro </p> $resultado <hr>";

        //Função com retorno e com parâmetro

        function teste4($x,$y){
            $soma = $x + $y;
            return $soma;
        }

        $num1 = 10;
        $num2 = 20;

        $result = teste4($num1,$num2);
        echo "<p> Função com retorno e com parâmetro </p> A soma é igual a: $result";
    ?>
</body>
</html>

