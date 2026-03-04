<?php

$host = "localhost";
$db = "basedatos_yaya";
$user = "root";
$pass = "";
$charset = "utf8mb4";
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$conexion = new PDO($dsn, $user, $pass);