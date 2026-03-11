<link rel="stylesheet" href="./../public/css/style.css">
<link rel="stylesheet" href="./../public/css/formRegisterUsers.css">

<div class="content">
    <div class="title-info">
        <h5>Registra un nuevo servicio en YÁYA</h5>
        <p>Formulario de registro para los servicios que va a ofertar</p>
    </div>
    <!-- servicio -->
    <div class="form-register">
        <form method="POST" action="/security/validacionRgistroServicio.php">
            <div class="infoUser">
                <!-- Información del usuario -->
                <h3>Información del Servicio</h3>
                <div class="input-label">
                    <label for="nombreServicio">Nombre del servicio:</label>
                </div>
                <div class="input-label">
                    <input name="nombreServicio" type="text" value="" placeholder="Ingresar nombre del servicio" required>
                </div>
                <div class="input-label">
                    <label for="categoria">Categoria:</label>
                </div>
                <div class="input-label">
                    <input name="categoria" type="text" value="" placeholder="Ingresar categoria" required>
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
                <h3>Información Adicional</h3>
                <input name="fechaRegistro" type="hidden" value="<?php echo date('Y-m-d H:i:s'); ?>">

                <!-- rol -->
                <div class="input-label">
                    <label for="rol">Rol:</label>
                    <input name="rol" type="text" value="" placeholder="seleccione rol" required>
                </div>
                <!-- credenciales -->
                <div class="input-label">
                    <label for="email">Email:</label>
                    <input name="email" type="email" value="" placeholder="ingrese email" required>
                </div>
                <div class="input-label">
                    <label for="contraseña">Contraseña:</label>
                    <input name="contraseña" type="password" value="" placeholder="ingrese Contraseña" required>
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
                    <input name="email_contacto" type="email" value="" placeholder="ingrese email de contacto" required>
                </div>

                <!-- Direcion -->
                <div class="input-label">
                    <label for="direccion">Dirección:</label>
                    <input name="direccion" type="text" value="" placeholder="ingrese direccion" required>
                </div>
            </div>
            <div class="contentButton">
                <input name="Guardar" type="submit" value="Guardar">
            </div>
        </form>
    </div>
</div>