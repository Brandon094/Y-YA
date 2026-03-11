<?php
// Este archivo se encarga de enrutar las vistas de los usuarios según el parámetro X en la URL
require_once(__DIR__ . '/../controllers/authController.php');
// Extrae el parámetro X de la URL, si no existe asigna null
$x = $_REQUEST['X'] ?? null;

// Define el contenido según el parámetro X
switch ($x) {
    case '1':
        $contenido = "./../views/formRegisterUsers.php";
        // Incluye la vista principal que contiene el navbar, sidebar y el área de contenido dinámico
        require_once(__DIR__ . '/../views/home.php');
        break;
    case '2':
        $contenido = "./../views/formRegisterServices.php";
        require_once(__DIR__ . '/../views/home.php');
        break;
    case '3':
        include "./../views/formRegisterUsers.php";
        break;
    default:
        $contenido = "./../views/dashboard.php";
        require_once(__DIR__ . '/../views/home.php');
        break;
}
