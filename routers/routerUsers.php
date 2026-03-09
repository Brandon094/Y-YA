<?php
include "./../views/RegistroUsuarios.php";

$var = new AuthController();

switch ($_REQUEST["X"]) {
    case '1': // Registro de usuario
        include("./../views/RegistroUsuarios.php");
        require $contenido = "./../views/RegistroUsuarios.php";
        break;
    case '2': // Reporte
        # code ...
        break;
    default:
        # code ...
        break;
}
