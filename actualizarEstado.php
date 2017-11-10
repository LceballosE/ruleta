<?php
include 'conexionBD.php';

$resultado="UPDATE saldo SET monto=$nuevoSaldo WHERE idUsuario ='1'";
$resu = $con->query($resultado);



?>