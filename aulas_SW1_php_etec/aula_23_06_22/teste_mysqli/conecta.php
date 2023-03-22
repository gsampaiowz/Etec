<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQLi Test</title>
    <style>
        body {
            color: aliceblue;
            background-color: steelblue;
            text-align: center;
            margin-top: 50px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
        }

        .graphs{
          margin-left: 25em;

        }
    </style>
</head>
<body>
    <?php
        //Dados do SGBD MySQL para a conexão
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "teste_mysqli";

        //Criando a conexão
        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        //Checando a conexão
        if ($conexao->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        echo "Conectado com sucesso <hr>";

    ?>
</body>
</html>
