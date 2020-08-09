<?php include_once 'includes/templates/header.php' ?>

    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Más sobre nosotros</h2>
        <div class="iconos-nosotros">
            <div class="icono">
                <img class="imgiconos" src="imagenes/clean.png" alt="Limpieza">
                <h3>Limpieza</h3>
                <p>Todos nuestros productos estan siguiendo algunos procedimientos muy estrictos de desinfección que se implementan diariamente, por lo que sus pedidos son completamente seguros.</p>
            </div>

            <div class="icono">
                <img class="imgiconos" src="imagenes/time.png" alt="Entregas">
                <h3>A tiempo</h3>
                <p>Little Pastry Chef ha sido destacada durante sus 25 años de trayectoria por la puntualidad de las entregas y además con la mejor calidad y sabor para todos tus eventos especiales.</p>
            </div>

            <div class="icono">
                <img class="imgiconos" src="imagenes/money.png" alt="Entregas">
                <h3>El mejor precio</h3>
                <p>Siendo una empresa con productos 100% artesanales, nos importa la economia de nuestros clientes, es por esto que somos reconocidos por mantener los mejores precios del mercado.</p>
            </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Pasteles destacados</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="imagenes/pastel1.png" alt="Pastel">
                <div class="contenido-anuncio">
                <h3>Pastel ChocoCrema</h3>
                    <p>Tamaño chico aproximado para 10 personas.</p>
                    <p class="precio">$349.00</p>
                    <a href="unpastel.php" class="boton boton-naranja d-block">Ver pastel</a>
                </div>
            </div>
            <div class="anuncio">
                <img src="imagenes/pastel2.png" alt="Pastel">
                <div class="contenido-anuncio">
                <h3>Pastel Soft</h3>
                    <p>Tamaño chico aproximado para 10 personas.</p>
                    <p class="precio">$299.00</p>
                    <a href="unpastel.php" class="boton boton-naranja d-block">Ver pastel</a>
                </div>
            </div>
            <div class="anuncio">
                <img src="imagenes/pastel3.png" alt="Pastel">
                <div class="contenido-anuncio">
                <h3>Pastel Orange</h3>
                    <p>Tamaño chico aproximado para 10 personas.</p>
                    <p class="precio">$259.00</p>
                    <!-- Pastel sabor cajeta, elaborado con mamon de sabor neutro, 
                con jarabe de 3 leches, cubierta sabor cajeta y decorado
                con ganache de chocolate blanco, escurriendo sobre las paredes cajeta,
                y frutos rojos como complemento. -->
                    <a href="unpastel.php" class="boton boton-naranja d-block">Ver pastel</a>
                </div>
            </div>
        </div>
        <div class="ver-todas">
            <a href="pasteles.php" class="boton boton-verde">Ver todos</a>
        </div>
    </main>



    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>Encuentra el pastel de tus sueños</h2>
            <p>Visita nuestras redes sociales</p>
            <a href=""><img class="redes facebook" src="imagenes/facebook.png" alt=""></a>
            <a href=""><img class="redes" src="imagenes/twitter.png" alt=""></a>
            <a href=""><img class="redes instagram" src="imagenes/instagram.png" alt=""></a>
        </div>
    </section>
    <div class="seccion-inferior contenedor seccion">
        <section class="blog">
            <h3 class="centrar-texto fw-300">Nuestros tipos de adorno</h3>
            <article class="entrada-blog">
                <img class="imagen" src="imagenes/pastel6.png" alt="">
                <div class="texto-entrada">
                    <h4>Decorado sencillo</h4>
                    <p>Adorno unicamente con cobertura de betún con sabor a elegir.</p>
                </div>
            </article>
            <article class="entrada-blog">
                <img class="imagen" src="imagenes/pastel4.png" alt="">
                <div class="texto-entrada">
                    <h4>Decorado normal</h4>
                    <p>Adorno con cobertura de betún o fondant sabor a eleccion, con chocolate derretido y frutas.</p>
                </div>
            </article>

            <article class="entrada-blog">
                <img class="imagen" src="imagenes/pastel5.png" alt="">
                <div class="texto-entrada">
                    <h4>Muy decorado </h4>
                    <p>Adorno con cobertura de betún o fondant sabor a eleccion, con chocolate y adorno de frutas ilimitado.</p>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3 class="centrar-texto fw-300">Testimoniales</h3>
            <div class="testimonial">
                <blockquote>El personal se comporto de una excelente forma, muy buena atencion. El pastel perfecto decorado y un excelente sabor.
                </blockquote>
                <p>- Monica Perez</p>
            </div>
            <div class="testimonial">
                <blockquote>Me encanto el pastel, una textura deliciosa, no esta seco, el adorno estuvo perfectamente realizado. Muchas gracias.
                </blockquote>
                <p>- Ana Sofia</p>
            </div>
        </section>

    </div>
    <?php include_once 'includes/templates/footer.php' ?>
    