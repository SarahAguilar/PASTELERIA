<?php include_once 'includes/templates/header.php' ?>
<section class="contenedor seccion">
    <div class="texto-sucursal">
        <h2 class="fw-300 centrar-texto">Inicia sesión</h2>
    </div>
<head>
  <title>REGISTRO USUARIO</title>
  <meta charset="UTF-utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,
initial-scale=1, maximun-scale=1, minimun-scale=1">
  <link rel="stylesheet" href="estiloregistro.css">
</head>
<body>
    <form action="registroU.php" method="post" class="form-register">
        <h2><center> REGÍSTRATE </center> </h2>
        <h2> Crea una cuenta </h2>
        <div class="contenedor-inputs">
        <input type="text"  name="nombre" placeholder="Nombre" class="input48" required>
        <input type="email"  name="correo" placeholder="Correo" class="input48" required>
        <input type="text"  name="usuario" placeholder="Usuario" class="input48" required>
        <input type="password"  name="clave" placeholder="Password" class="input48" required>
        <input type="submit" value="Registrar" class="btn-enviar" required>
        <p class="form-link">Si ya tienes una cuenta <a href="login.php">Ingresa aquí</a></p>
      </div>

    </form>
  </body>
</html>

<?php include_once 'includes/templates/footer.php' ?>
