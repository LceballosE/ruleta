<?php

include 'leerSaldo.php';
$valor = $_GET["num"];

global $nuevoSaldo;

$resta =$fetch["num"] + $valor;

$nuevoSaldo = $resta;

include 'actualizarEstado.php';
$_SESSION['nuevoSaldo'] = $nuevoSaldo;

session_destroy();

?>