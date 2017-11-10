<?php
$fp = fopen("historial.txt", "a+");
$numero = $_GET["num"];
fputs($fp, $numero."\r\n");
fclose($fp);

?>