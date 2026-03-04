<?php
extract($_REQUEST);
if (isset($_REQUEST['x'])){
    $mj = "su registro fue exitoso, por fsavor, ingrese sus credenciales";
}else{
    $mj= "";
}
?>

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
    <h6> <?php echo $mj?> </h6>
    <form action="./validacion.php" method="post">
        <input name="email" type="text" value="" placeholder="email">
        <input name="pass" type="text" value="" placeholder="pass">
        <input name="ok" type="submit">
    </form>
    <a href="./registroUsuario.php">Crear cuenta</a>    
</body>
</html>