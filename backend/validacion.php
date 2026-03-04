<?php

include_once "./seguridad/conexion.php";
extract($_REQUEST);

$_usuario = $_REQUEST ['email'];
$pass = $_REQUEST ['pass'];

$sql = $conexion -> prepare("SELECT * FROM credenciales WHERE email=? AND contraseña=?");
$sql -> bindParam(1,$usuario);
$sql -> bindParam(2,$pass);
$sql -> execute();

$rta = $sql -> fetchAll();


if ($rta) {
    $sqlU = $conexion_U -> prepare ("SELECT * FROM usuario WHERE emeil=?");
    $sqlU -> bindParam(1,$usuario);
    $sqlU -> execute ();

$rtaU = $rtaU -> fetchAll();

if ($rta) {
    foreach ($rtaU as $row) {
        echo 'Bienbenido'. $row ['nombre'] ."". $row ['apellidos'];
    }
} else {
    echo "error credenciales";
}
} else{
    echo "error de conexion";
}