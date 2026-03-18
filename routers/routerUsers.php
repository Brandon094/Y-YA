<?php
// Este archivo se encarga de enrutar las vistas de los usuarios según el parámetro X en la URL
require_once(__DIR__ . '/../controllers/authController.php');
// Extrae el parámetro X de la URL, si no existe asigna null
$x = $_REQUEST['X'] ?? null;

// Define el contenido según el parámetro X
switch ($x) {
    case '1':
        include(__DIR__ . "/../views/formRegisterUsers.php");
        break;
    case '2':
        $contenido = "./../views/formRegisterServices.php";
        require_once(__DIR__ . '/../views/home.php');
        break;
    case '3':
        $auth = new AuthController(); // Instancia del controlador de autenticación
        $auth->logout(); // Llama al método de logout para cerrar la sesión
        include(__DIR__ . "/../views/logout.php"); // Muestra la vista de logout después de cerrar sesión
        break;
    default:
        $contenido = "./../views/dashboard.php";
        require_once(__DIR__ . '/../views/home.php');
        break;
}
