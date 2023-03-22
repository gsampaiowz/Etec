<?php
echo "<style>
body{
    color: aliceblue;
    background-color: royalblue;
    text-align: center;
    margin-top: 250px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
}
h5{
    color: orange;
}
</style>";
// Trabalhando com vetores
// $numeros = array(1,12,50,1.2);
$numeros = [1,12,50,1.2];
//echo $numeros[];
$qtd = count($numeros);
echo "<h1> Meu vetor tem: $qtd posições </h1> <hr>";
$res = 0;
for($i=0;$i<4;$i++){
    echo "Posição $i = $numeros[$i] <br>";
    $res = $res + $numeros[$i];
    echo "<h5>Soma parcial = $res</h5>  <br>";
}
$media = $res/$qtd;
echo "<hr> A soma total desses números é $res";
echo "<br> A média final é $media";
?>