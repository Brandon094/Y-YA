<link rel="stylesheet" href="./../public/css/style.css">
<link rel="stylesheet" href="./../public/css/formRegisterService.css">

<div class="content">
    <div class="title-info">
        <h5>Registra un nuevo servicio en YÁYA</h5>
        <p>Formulario de registro para los servicios que va a ofertar</p>
    </div>
    <!-- servicio -->
    <div class="form-register">
        <form method="POST" action="/security/validacionRgistroServicio.php">
            <div class="infoServi">
                <!-- Información del usuario -->
                <h3>Información del Servicio</h3>
                <div class="input-label">
                    <label for="categoriaServicio">Categoria del servicio:</label>
                </div>
                <div class="input-label">
                    <input name="categoriaServicio" type="text" value="" placeholder="Seleccione la categoria del servicio" required>
                </div>
                <div class="input-label">
                    <label for="nombreServicio">Nombre del servicio:</label>
                </div>
                <div class="input-label">
                    <input name="nombreServicio" type="text" value="" placeholder="Ingresar nombre del servicio" required>
                </div>
                <div class="input-label">
                    <label for="descripcion">Descripcion:</label>
                </div>
                <div class="input-label" id="descripcion">
                    <input name="descripcion" type="text" value="" placeholder="Ingresar una descripcion sobre el servicio" required width="100px">
                </div>
                <div class="input-label">
                    <label for="precio">Precio:</label>
                </div>
                <div class="input-label">
                    <input name="precio" type="text" value="" placeholder="Ingrese el precio del servicio" required>
                </div>
                <!-- Direcion -->
                <div class="input-label">
                    <label for="disponibilidad">Disponibilidad:</label>
                </div>
                <div class="input-label">
                    <input name="disponibilidad" type="text" value="" placeholder="ingrese disponibilidad" required>
                </div>
            </div>
    </div>
    <div class="contentButton">
        <input name="Guardar" type="submit" value="Guardar">
        <input name="Cancelar" type="submit" value="Cancelar">
    </div>
    </form>
</div>
</div>