<?php
$fp = fopen("historial.txt", "a+");
$numero = $_GET["num"];
$contador = 0;
$numeros;

while(!feof($fp)) {
    $numeros[$contador] = fgets($fp);
    $contador++;
}
$contador = $contador-2;
$num;
$aux = 0;

if($contador<$numero){
    $limite=0;
}else{
    $limite=$contador-$numero+1;
}

for ($i = $contador; $i >= $limite; $i--){
    $num[$aux]=explode("\r\n",$numeros[$i])[0];
    $aux++;
}
echo json_encode(array("num"=>$num));
?>