<?php

/**
 * clase  que representa la tabla "usuarios" de la db
 */
class Usuarios
{
    private $conn;          //variable privada para guardar la conexion a la db
    /** Atributos del usuario (columnas de la tabla) */
    public $id;
    public $nombreUsuario;
    public $apellido;
    public $numeroCedula;
    public $fechaNacimiento;
    public $fechaRegistro;
    public $rol;
    public $idCredencial;
    public $idContactos;
    public $idDirecciones;
    /** constructor 
     * se ejecuta automaticamente cuando se crea el objeto aqui e recibe la conexion a la db
     */
    public function __construct($db)
    { // guarda la conexion en la variable $conn
        $this->conn = $db;
    }
    /** metodo para registrar un nuevo usuario en la db */
    public function crear()
    {
        //consulta SQL para insertar datos en la tabla usuarios 
        $sql = "INSERT INTO usuarios (nombreUsuario,apellido, numeroCedula, fechaNacimiento,rol,idCredencial,idContactos,idDirecciones) VALUES (:nombreUsuario,:apellido,:numeroCedula,:fechaNacimiento,:rol,:idCredencial,:idContactos,:idDirecciones)";

        //prepraramos la consulta para evitar errores y mejorar seguridad
        $stmt = $this->conn->prepare($sql);

        //aqui conectamos cada dato del objeto con la consulta SQL
        $stmt->bindParam(":nombreUsuario", $this-> nombreUsuario);
        $stmt->bindParam(":apellido", $this->apellido);
        $stmt->bindParam(":numeroCedula", $this->numeroCedula);
        $stmt->bindParam(":fechaNacimiento", $this->fechaNacimiento);
        $stmt->bindParam(":rol", $this->rol);
        $stmt->bindParam(":idCredencial", $this->idCredencial);
        $stmt->bindParam(":idContactos", $this->idContactos);
        $stmt->bindParam(":idDirecciones", $this->idDirecciones);

        //ejecutamos la consulta (guarda el usurio en la db)
        return $stmt->execute();
    }
}
