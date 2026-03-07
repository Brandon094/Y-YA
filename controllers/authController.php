<?php 
include_once './model/authModel.php';

class AuthController{

    public function login($username, $password){
        $modelLogin = new Auth();
        $rta = $modelLogin->login($username, $password);
        if ($rta == "2") {
            $contenido = "Location: ./../views/dashboard.php";
            require "./views/home.php";
        }
    }
}