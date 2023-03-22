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
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $user = 'Sampaio';
        $pass = '123';

        if($usuario == $user && $senha == $pass){
            // echo "<h1>Confirmado!";
            session_start();
            $_SESSION['username'] = $usuario;
            $_SESSION['logado'] = 1;
            header("Location: restrita.php");
        }else{
            echo "<h1>Recusado!";
        }
    ?>
</body>
</html>