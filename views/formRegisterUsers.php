<link rel="stylesheet" href="./../public/css/style.css">
<link rel="stylesheet" href="./../public/css/footer.css">
<link rel="stylesheet" href="./../public/css/content.css">
<link rel="stylesheet" href="./../public/css/formRegisterUsers.css">

<div class="content">
    <div class="title-info">
        <h5>Registra un nuevo usuario en YÁYA</h5>
        <p>Formulario de Registro</p>
    </div>
    <!-- usuario -->
    <div class="form-register">
        <form method="POST" action="/security/validacionRgistroUsuario.php">
            <div class="infoUser">
                <!-- Información del usuario -->
                <h3>Información del Usuario</h3>
                <div class="input-label">
                    <label for="nombreUsuario">Nombre de usuario:</label>
                </div>
                <div class="input-label">
                    <input name="nombreUsuario" type="text" value="" placeholder="Ingresar Nombre" required>
                </div>
                <div class="input-label">
                    <label for="apellido">Apellidos:</label>
                </div>
                <div class="input-label">
                    <input name="apellido" type="text" value="" placeholder="Ingresar Apellidos" required>
                </div>
                <div class="input-label">
                    <label for="numeroCedula">Número de Cédula:</label>
                </div>
                <div class="input-label">
                    <input name="numeroCedula" type="text" value="" placeholder="Ingrese numero de Cedula" required>
                </div>
                <div class="input-label">
                    <label for="FechaNacimiento">Fecha de Nacimiento:</label>
                </div>
                <div class="input-label">
                    <input name="FechaNacimiento" type="date" value="" placeholder="Ingrese fecha de nacimiento" required>
                </div>
            </div>
            <!-- Información adicional del usuario -->
            <div class="infoUserSec">
                <h3>Seguridad de la cuenta</h3>
                <input name="fechaRegistro" type="hidden" value="<?php echo date('Y-m-d H:i:s'); ?>">

                <!-- credenciales -->
                <div class="input-label">
                    <label for="email">Email:</label>
                </div>
                <div class="input-label">
                    <input name="email" type="email" value="" placeholder="ingrese email" required>
                </div>
                <div class="input-label">
                    <label for="contraseña">Contraseña:</label>
                </div>
                <div class="input-label">
                    <input name="contraseña" type="password" value="" placeholder="ingrese Contraseña" required>
                </div>

                <!-- rol -->
                <div class="input-label">
                    <label for="rol">Rol:</label>
                </div>
                <div class="input-label">
                    <input name="rol" type="text" value="" placeholder="seleccione rol" required>
                </div>

                <!-- contactos-->
                <div class="input-label">
                    <label for="telefono">Teléfono:</label>
                </div>
                <div class="input-label">
                    <input name="telefono" type="text" value="" placeholder=" numero de telefono" required>
                </div>
                <div class="input-label">
                    <label for="email_contacto">Email de contacto:</label>
                </div>
                <div class="input-label">
                    <input name="email_contacto" type="email" value="" placeholder="ingrese email de contacto" required>
                </div>

                <!-- Direcion -->
                <div class="input-label">
                    <label for="direccion">Dirección:</label>
                </div>
                <div class="input-label">
                    <input name="direccion" type="text" value="" placeholder="ingrese direccion" required>
                </div>
            </div>
            <div class="contentButton">
                <input name="Guardar" type="submit" value="Confirmar registro">
            </div>
        </form>
    </div>
    <button class="btn-home" type="button" onclick="window.location.href='./../index.php'">Volver al inicio</button>
</div>
<?php include __DIR__ . '/footer.php'; ?>