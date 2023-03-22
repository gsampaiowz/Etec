<?php

    echo "<h3>Pós-incremento</h3>";
    $a = 5;
    
    echo "<style> *{background-color: purple;}</style>";
    echo "<h1 style='text-align: center; color: yellow; font-family: times new roman; margin-top:15%;' >";
    echo "Deve ser 5: " . $a-- . "<br />\n";
    echo "Deve ser 6: " . $a . "<br />\n";

?>