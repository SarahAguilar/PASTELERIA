<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conn = new mysqli("localhost", "root", "", "bdprueba");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
  header("Location: Index.php");
}
else {
  echo "Error en la autenticacion";
}

 ?>
