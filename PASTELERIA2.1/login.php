<?php include_once 'includes/templates/header.php' ?>
<section class="contenedor seccion">
    <div class="texto-sucursal">
        <h2 class="fw-300 centrar-texto">Inicia sesión</h2>
    </div>

    <head>
      <title>Formulario login</title>
      <meta charset="UTF-utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1, maximun-scale=1, minimun-scale=1">
      <link rel="stylesheet" href="estilologin.css">
    </head>
    <body>
        <form action="BBDD/loginU.php" method="post">
            <h2> FORMULARIO LOGEO </h2>
            <input type="text" placeholder="&#128272; Usuario" name="usuario">
            <input type="password" placeholder="&#128272; Password" name="clave">
            <input type="submit" value="Ingresar">

        </form>
      </body>

<?php include_once 'includes/templates/footer.php' ?>
