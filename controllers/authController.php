<?php 
include_once(__DIR__ . '/../model/authModel.php'); // Incluye el modelo de autenticación para acceder a la lógica de negocio relacionada con el login/logout

class AuthController{
    /*** Login
     * Funcion para poder acceder al sistema
     */
    public function login($username, $password){
        $modelLogin = new Auth();
        $user = $modelLogin->login($username, $password);

        if ($user) {
            // Inicia la sesión y guarda algunos datos del usuario
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            $_SESSION['user'] = [
                'id' => $user['id'] ?? null,
                'nombreUsuario' => $user['nombreUsuario'] ?? null,
                'rol' => $user['rol'] ?? null,
            ];

            header("Location: ./views/home.php");
            exit();
        } else {
            header("Location: ./index.php?error=Credenciales incorrectas");
            exit();
        }
    }
    /*** Logout
     * Funcion para cerrar la sesion ***/
    public function logout(){
        session_destroy();
        header("Location: /index.php");
    }
}