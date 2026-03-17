<?php
function conectionDB(){
    // Configuración de la conexión a la base de datos
    try {
        $conn = new PDO("mysql:host=localhost;dbname=db_yaya", "root", "");
        return $conn; // Retorna la conexión establecida
    } catch (PDOException $e) { // Manejo de errores de conexión
        echo "Error de conexión a la base de datos.";
        return null; // Retorna null en caso de error
    }
}