<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <h5>Nuevo Usuario YÁYA</h5>

    <!-- usuario -->
    <form method="POST" action="./validarRegistroUsuario.php">
        <input name="nombreUsuario" type="text" value="" placeholder="Ingresar Nombre">
        <input name="apellido" type="text" value="" placeholder="Ingresar Apellidos">
        <input name="numeroCedula" type="text" value="" placeholder="Ingrese numero de Cedula">
        <input name="FechaNacimiento" type="date" value="" placeholder="Ingrese fecha de nacimiento ">
        <input name="fechaRegistro" type="timestamp" value="" placeholder="">

        <!-- rol -->
        <input name="rol" type="text" value="" placeholder="seleccione rol">

        <!-- credenciales -->
        <input name="email" type="text" value="" placeholder="ingrese email">
        <input name="contraseña" type="text" value="" placeholder="ingrese Contraseña">

        <!-- contactos-->
        <input name="telefono" type="text" value="" placeholder=" numero de telefono">
        <input name="email" type="text" value="" placeholder="ingrese email de contacto">

        <!-- Direcion -->
        <input name="direccion" type="text" value="" placeholder="ingrese direccion">
        <input name="Guardar" type="submit" value="Guardar" placeholder="guardar">
    </form>
</body>

</html>