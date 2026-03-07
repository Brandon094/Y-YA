<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="./../public/css/login.css">
</head>

<body>
    <!-- Titulo de la pagina -->
    <h2 class = "title-login" >Login YÁYA</h2>
    <!-- Formulario de login -->
    <form method="POST" action="./../index.php" class="form-login">
        <input type="text" id="username" name="username" required placeholder="Usuario">
        <br><br>
        <input type="password" id="password" name="password" required placeholder="Contraseña">
        <br><br>
        <button type="submit" name="login" value="login">Iniciar Sesión</button>
    </form>
</body>

</html>