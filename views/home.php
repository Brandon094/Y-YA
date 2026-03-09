<?php 
    $contenido = "./views/dashboard.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi Dashboard</title>
    <!-- Vincula los archivos de estilo -->
    <link rel="stylesheet" type="text/css" media="screen" href="./public/css/style.css"> <!-- Estilos generales -->
    <link rel="stylesheet" type="text/css" media="screen" href="./public/css/navbar.css"> <!-- Estilos para la barra de navegación -->
    <link rel="stylesheet" type="text/css" media="screen" href="./public/css/sidebar.css"> <!-- Estilos para la barra lateral -->
    <link rel="stylesheet" type="text/css" media="screen" href="./public/css/content.css"> <!-- Estilos para el contenido principal -->
    <link rel="stylesheet" type="text/css" media="screen" href="./public/css/container.css"> <!-- Estilos para el contenedor principal -->
    <link rel="stylesheet" type="text/css" media="screen" href="./public/css/footer.css"> <!-- Estilos para el pie de página -->
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
    <?php include './views/footer.php'; ?>
</body>

</html>