<?php
include_once './controllers/authController.php';
/** Controlador de autenticación */
if (isset($_POST['login'])) {
    $auth = new AuthController(); // Instancia del controlador de autenticación
    $auth->login($_POST['username'], $_POST['password']); // Llama al método de login con los datos del formulario
} else {
    header("Location: ./views/login.php"); // Redirige a la página de login si no se ha enviado el formulario
    exit();
}