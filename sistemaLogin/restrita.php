<?php
session_start();
     if($_SESSION['logado'] != 1){   
         header("Location: index.html");
     }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
    <style>
        body
        {
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
        
            
        echo "<h1>Você está na página restrita";
        echo "<hr><a href='logout.php'> SAIR </a>";
    ?>
</body>
</html>