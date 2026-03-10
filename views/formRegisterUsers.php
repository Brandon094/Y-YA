<div class="content">
    <div class="info">
        <h5>Registra un nuevo Usuario YÁYA</h5>
    </div>
    <!-- usuario -->
    <div class="form-register">
        <form method="POST" action="/security/validacionRgistroUsuario.php">
            <input name="nombreUsuario" type="text" value="" placeholder="Ingresar Nombre" required>
            <input name="apellido" type="text" value="" placeholder="Ingresar Apellidos" required>
            <input name="numeroCedula" type="text" value="" placeholder="Ingrese numero de Cedula" required>
            <input name="FechaNacimiento" type="date" value="" placeholder="Ingrese fecha de nacimiento" required>
            <input name="fechaRegistro" type="hidden" value="<?php echo date('Y-m-d H:i:s'); ?>">

            <!-- rol -->
            <input name="rol" type="text" value="" placeholder="seleccione rol" required>

            <!-- credenciales -->
            <input name="email" type="email" value="" placeholder="ingrese email" required>
            <input name="contraseña" type="password" value="" placeholder="ingrese Contraseña" required>

            <!-- contactos-->
            <input name="telefono" type="text" value="" placeholder=" numero de telefono" required>
            <input name="email_contacto" type="email" value="" placeholder="ingrese email de contacto" required>

            <!-- Direcion -->
            <input name="direccion" type="text" value="" placeholder="ingrese direccion" required>
            <input name="Guardar" type="submit" value="Guardar">
        </form>
    </div>
</div>