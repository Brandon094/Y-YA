<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi Dashboard</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./public/css/style.css">
</head>

<body>
    <?php
    include './views/navbar.php'; ?>

    <!-- CONTENEDOR PRINCIPAL -->
    <div class="container">
        <!-- Incluye el sidebar -->
        <?php include 'sidebar.php';
        //Area de contenido principal
        include_once $contenido;
        ?>
    </div>
</body>

</html>