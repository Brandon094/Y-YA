<?php 
include_once(__DIR__ . '/../model/authModel.php');

class AuthController{
    /*** Login
     * Funcion para poder acceder al sistema
     */
    public function login($username, $password){
        $modelLogin = new Auth();
        $rta = $modelLogin->login($username, $password);
        if ($rta == "2") {
            // redirige al home usando la ruta relativa al servidor
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