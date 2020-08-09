<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Pastry Chef</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header class="site-header ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="Index.php" class="logo">LittlePastryChef</a>
                <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="sucursales.php">Sucursales</a>
                </nav>
            </div>
        </div>
        <!-- contenedor -->
    </header>

    <main class="contenedor">
        <!-- Solo se debe tener uno por pagina -->
        <h1 class="fw-300 centrar-texto">Pastel</h1>

        <div class="contenido-nosotros">
            <img class="unpastel" src="imagenes/pastel3.png" alt="">
            <div class="texto-nosotros">
                <blockquote>Pastel Orange</blockquote>
                <p>Pastel con bizcocho sabor naranja y relleno con betún sabor vainilla. Cuenta con una cubierta
                artesanal de betún sabor vainilla. Decorado con fresas, frambuesas, cerezas deshidatradas, 
                Kumquat (o tambien conocidas como naranjas de la china) y con ralladuras acarameladas de cascara
                 de naranja.</p>
                <p>Precio: $259.00 </p>
                <form name="form1">
                    <div class="extras" id="resumen">
                        <fieldset>
                            <legend>Perzonalizalo</legend>
                            <label for="tipos">Decoración</label>
                            <select id="decoracion" required>
                            <option value="" disabled selected>-- Seleccione la decoración--</option>
                            <option value="sencillo">Sencillo $30.00</option>
                            <option value="decorado">Decorado $40.00</option>
                            <option value="muydecorado">Muy decorado $50.00</option>
                        </select>
                            <label for="Opciones">Fruta</label>
                            <select id="fruta" required>
                            <option value="" disabled selected>-- Seleccione la fruta--</option>
                            <option value="durazno">Durazno $5.00</option>
                            <option value="fresa">Fresa $10.00</option>
                            <option value="frambuesa">Frambuesa $15.00</option>
                            <option value="nuez">Nuez $20.00</option>
                        </select>
                            <label>Numero de personas</label>
                            <select id="personas" required>
                            <option value="" disabled selected>-- Seleccione la cantidad de personas opcional--</option>
                            <label>Por cada 10 personas aumentan $20</label>
                            <option value="diez">10</option>
                            <option value="veinte">20</option>
                            <option value="treinta">30</option>
                            <option value="cuarenta">40</option>
                            <option value="cincuenta">50</option>
                        </select>





                            <input type="submit" value="Calcular" id="calcular" class="boton enviar">
                        </fieldset>



                        <fieldset class="resumen">
                            <legend>Compra</legend>
                            <div id="total1" class="total">
                                <p>Total:</p>
                                <div id="suma-total">
                                    <label id="costo">__</label>

                                </div>
                                <input id="btnRegistro" type="submit" class="boton enviar" value="Pagar">
                            </div>
                        </fieldset>

                    </div>
                </form>
            </div>
        </div>
    </main>



    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="sucursales.html">Sucursales</a>
            </nav>
            <p class="copyright">Todos los derechos reservados &copy; </p>
        </div>
    </footer>
    <script src="js/carrito.js"></script>
</body>

</html>