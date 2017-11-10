<?php
include 'conexionBD.php';
$numero=$_GET["num"];

$resultado="UPDATE saldo SET monto=$numero WHERE idUsuario ='1'";
$resu = $con->query($resultado);

session_destroy();


?>