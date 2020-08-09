<?php include_once 'includes/templates/header.php' ?>

    <main class="contenedor seccion">
        <h2 class=" fw-300 centrar-texto ">Llena el formulario para contactarnos</h2>
        <form>
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="Nombre ">Nombre: </label>
                <input type="text " id="Nombre " placeholder="Tu nombre " required>

                <label for="Apellido ">Apellido: </label>
                <input type="text " id="Apellido " placeholder="Tu apellido " required>

                <label for="Email ">Email: </label>
                <input type="email " id="Email " placeholder="Tu correo electronico " required>

                <label for="Telefono ">Télefono: </label>
                <input type="tel " id="Telefono " placeholder="Tu número de teléfono " required>


                <label for="Mensaje ">Comentarios: </label>
                <textarea id="Mensaje "></textarea>

            </fieldset>
            <fieldset>
                <legend>Información</legend>
                <label for="Opciones ">Tipo de pedido</label>
                <select id="Opciones ">
                <option value=" " disabled selected>-- Seleccione --</option>
                <option value="Menor ">Menor o igual  a 100 personas</option>
                <option value="Mayor ">Mayor de 100 personas</option>
            </select>
                <label for="Presupuesto ">Presupuesto</label>
                <input type="number " min="300 " max="20000 " step="100 ">
            </fieldset>
            <input type="submit" value="Enviar" class="boton enviar">
        </form>
    </main>

    <?php include_once 'includes/templates/footer.php' ?>