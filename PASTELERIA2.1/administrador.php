<?php include_once 'includes/templates/header.php' ?>
<section class="contenedor seccion">
    <div class="texto-sucursal">
        <h2 class="fw-300 centrar-texto">Solo el personal autorizado puede acceder</h2>
    </div>

    <head>
      <title>Formulario Administrador</title>
      <meta charset="UTF-utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1, maximun-scale=1, minimun-scale=1">
      <link rel="stylesheet" href="estilologin.css">
      <script src="administrador.js"></script>
    </head>
    <body>
        <form action="js/administrador.js" method="post" onsubmit="return validar();">
            <h2><center> Iniciar sesión como administrador </center></h2>
            <input type="text" placeholder="&#128272; Usuario" id="usuario" name="usuario">
            <input type="password" placeholder="&#128272; Password" id="clave" name="clave">
            <input type="submit" value="Ingresar">

        </form>
      </body>

<?php include_once 'includes/templates/footer.php' ?>
