<?php 
include_once './model/authModel.php';

class AuthController{
    /*** Login
     * Funcion para poder acceder al sistema
     */
    public function login($username, $password){
        $modelLogin = new Auth();
        $rta = $modelLogin->login($username, $password);
        if ($rta == "2") {
            $contenido = "Location: ./../views/dashboard.php";
            require "./views/home.php";
        }
    }
    /*** Logout
     * Funcion para cerrar la sesion ***/
    public function logout(){
        session_destroy();
        header("Location: ./../index.php");
    }
}