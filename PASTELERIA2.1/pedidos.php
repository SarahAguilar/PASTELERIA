<?php include_once 'includes/templates/header.php' ?>

<center><h1>sucursales</h1></center>

<?php 
 try {
     require_once('BBDD/tablas.php');
     $sql = " SELECT * FROM sucursales ";
     $resultado = $conn->query($sql);
 } catch (\Exception $e){
     echo $e->getMessage();
 }
?>
<div class="sucursales">
<?php 
 $sucursales = $resultado->fetch_assoc(); //fetch_assoc() es la forma en la que se imprimen los datos como en array
?>
<pre>
<?php var_dump($sucursales); ?>
</pre>
</div>
<?php 
$conn->close(); //Para cerrar la conexion a la base de datos
?>

<?php include_once 'includes/templates/footer.php' ?>