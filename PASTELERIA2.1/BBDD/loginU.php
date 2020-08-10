<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conn = new mysqli("localhost", "root", "", "dblogin");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
  $sLang = lang();
  header("Location: Index.php?lang=$sLang");
}
else {
  echo "Error en la autenticacion";
}

 ?>
