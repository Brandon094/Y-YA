<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace al CSS de los estilos generales -->
    <link rel="stylesheet" type="text/css" media="screen" href="./../public/css/style.css">
    <!-- Enlace al CSS específico del login -->
    <link rel="stylesheet" type="text/css" media="screen" href="./../public/css/login.css">
    <!-- Enlace al CSS específico del footer -->
    <link rel="stylesheet" type="text/css" media="screen" href="./../public/css/footer.css">
</head>

<body>
    <!-- Contenedor principal del login -->
    <div class="container">
        <div class="container-img"> <!-- Logo de YÁYA -->
            <img src="./../public/img/logo.png" alt="Logo de YÁYA">
        </div>
        <!-- Titulo de la pagina -->
        <h2 class="title-login">LogIn YÁYA</h2>
        <!-- Formulario de login -->
        <form method="POST" action="./../index.php" class="form-login">
            <div class="form-group">
                <img src="./../public/img/user.svg" alt="Icono de usuario" class="icon-user">
                <label for="username">Ingrese su nombre de usuario:</label>
            </div>
            <input type="text" id="username" name="username" required placeholder="Usuario">
            <br><br>
            <div class="form-group">
                <img src="./../public/img/user-lock.svg" alt="Icono de usuario" class="icon-user">
                <label for="password">Ingrese su contraseña:</label>
            </div>
            <input type="password" id="password" name="password" required placeholder="Contraseña">
            <br><br>
            <hr>
            <div class="actions">
                <button type="submit" name="login" value="login">Iniciar Sesión</button>
                <p> No tienes una cuenta? <a href="./../routers/routerUsers.php?X=3">Registrate</a>
                </p>
            </div>
        </form>
    </div>
    <!-- Incluyendo el footer -->
    <?php include './footer.php'; ?>
</body>

</html>