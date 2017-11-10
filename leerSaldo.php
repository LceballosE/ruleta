<?php

include 'conexionBD.php';

$resultado=null;
$resultado="SELECT monto FROM saldo WHERE idUsuario ='1'";
$resu = $con->query($resultado);

while($row = $resu->fetch_assoc()) {
    //echo json_encode(array("num"=>$row["monto"]));
    $fetch = array("num"=>$row["monto"]);
}
session_destroy();

?>