<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'etecmcm' && $password == 141){
        header('Location: painel/index.html');
        exit();
    }
    else{
        echo '<script type="text/javascript"> 
                alert("Usuário ou senha incorretos")
              </script>';
        echo '<script type="text/javascript"> 
                window.location = "index.html"
              </script>';
    }

?>