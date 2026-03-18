<?php
include_once(__DIR__ . '/../security/conexion.php');
class Auth
{
    /**
     * Realiza la autenticación del usuario.
     *
     * El login puede ser el nombre de usuario (usuarios.nombreUsuario) o el email
     * registrado en la tabla `credenciales.email`. Se intenta validar la contraseña
     * en la tabla `credenciales` y luego obtener la información del usuario.
     *
     * @param string $login  Nombre de usuario o email
     * @param string $password  Contraseña (sin hash)
     * @return array|false  Datos del usuario o false si no se encontró coincidencia
     */
    public function login($login, $password)
    {
        $conn = conectionDB();

        // 1) Intentar obtener el usuario por nombre de usuario
        $userStmt = $conn->prepare("SELECT * FROM usuarios WHERE nombreUsuario = :login LIMIT 1");
        $userStmt->bindParam(':login', $login);
        $userStmt->execute();
        $user = $userStmt->fetch(PDO::FETCH_ASSOC);

        // 2) Si encontramos un usuario, validamos su contraseña a través de la credencial asociada
        if ($user && !empty($user['idCredencial'])) {
            $credStmt = $conn->prepare("SELECT * FROM credenciales WHERE id = :credId AND contraseña = :password LIMIT 1");
            $credStmt->bindParam(':credId', $user['idCredencial']);
            $credStmt->bindParam(':password', $password);
            $credStmt->execute();
            $cred = $credStmt->fetch(PDO::FETCH_ASSOC);

            if ($cred) {
                return $user;
            }
            // Si encontramos el usuario pero la contraseña no coincide, devolvemos false
            return false;
        }

        // 3) Si no encontramos el usuario por nombre de usuario, intentamos buscar por email en credenciales
        $credStmt = $conn->prepare(
            "SELECT * FROM credenciales WHERE email = :login AND contraseña = :password LIMIT 1");
        $credStmt->bindParam(':login', $login);
        $credStmt->bindParam(':password', $password);
        $credStmt->execute();
        $cred = $credStmt->fetch(PDO::FETCH_ASSOC);

        if (!$cred) {
            return false;
        }

        // 4) Si existe la credencial, buscamos al usuario asociado (por idCredencial o por coincidencia de nombre de usuario)
        $userStmt = $conn->prepare(
            "SELECT * FROM usuarios WHERE idCredencial = :credId
                OR nombreUsuario = :login LIMIT 1"
        );
        $userStmt->bindParam(':credId', $cred['id']);
        $userStmt->bindParam(':login', $login);
        $userStmt->execute();

        return $userStmt->fetch(PDO::FETCH_ASSOC);
    }
}
