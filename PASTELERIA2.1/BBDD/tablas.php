<?php
$conn = new mysqli("localhost", "DESARROLLADOR", "HPmg87tcA", "pasteleria");
if ($conn->connect_errno){
  echo "Fallo al conectar MySQL: (". $conn->connect_errno . ")" . $conn ->connect_error;
}
if (!$conn->query("DROP TABLE IF EXISTS articulos") ||
(!$conn->query("CREATE TABLE articulos (id_articulos INT PRIMARY KEY, tipoarticulo VARCHAR(45), precio VARCHAR(10), descripcion VARCHAR(45), stock INT(3))") ||
!$conn->query("INSERT INTO articulos VALUES (1, 'Pastel de chocolate', '$400', 'Decorado personalizado.', 15)") &
!$conn->query("INSERT INTO articulos VALUES (2, 'Pastel de fresa', '$400', 'Decorado personalizado.', 12)"))) {
  echo "Fallo de la creacion de la tabla articulos: (" . $conn->errno . ") " . $conn->error . "------ ";
}
if (!$conn->query("DROP TABLE IF EXISTS sucursales") ||
(!$conn->query("CREATE TABLE sucursales (id_sucursales INT PRIMARY KEY, nombre VARCHAR(30), telefono INT(10), ubicacion VARCHAR(100))") ||
!$conn->query("INSERT INTO sucursales VALUES (1, 'Sucursal Principal', 2221456788, 'Blvr. Hermanos Serdán 270, Rancho Posadas, 72060 Puebla, Pue.')") &
!$conn->query("INSERT INTO sucursales VALUES (2, 'Sucursal Cholula', 2221356944, 'Avenida Miguel Hidalgo 102, Centro, Codigo postal 72760 Cholula, Pue.')") &
!$conn->query("INSERT INTO sucursales VALUES (3, 'Sucursal NY', 0345988957, '95 Washington Street, Hoboken, NJ 07030, Nueva York, Estados Unidos.')"))) {
  echo "Fallo de la creacion de la tabla sucursales: (" . $conn->errno . ") " . $conn->error . "------ ";
}
if (!$conn->query("DROP TABLE IF EXISTS direccion_cliente") || 
(!$conn->query("CREATE TABLE direccion_cliente (id_direccion_cliente INT PRIMARY KEY, calle VARCHAR(25), numero INT(5), colonia VARCHAR(20), ciudad VARCHAR(20), C.P VARCHAR(5))") ||
!$conn->query("INSERT INTO direccion_cliente VALUES (1, 'Rose', 10, 'Flowers', 'Nueva York', '07045')"))) {
  echo "Fallo de la creacion de la tabla direccion_cliente: (" . $conn->errno . ") " . $conn->error . "------ ";
}
if (!$conn->query("DROP TABLE IF EXISTS clientes") ||
(!$conn->query("CREATE TABLE clientes (id_clientes INT PRIMARY KEY, nombre VARCHAR(20), apellidoP VARCHAR(20), apellidoM VARCHAR(20), 
correo VARCHAR(40), telefono INT(10), RFC VARCHAR(15), tipopago VARCHAR(20), id_direccion_cliente INT, FOREIGN KEY id_direccion_cliente)") ||
!$conn->query("INSERT INTO clientes VALUES (1, 'Sarah Itzel', 'Dominguez', 'Aguilar', 'sarahguilar@gmail.com', 2225324119, 
'DOAS020701', 'Efectivo', 1)"))) {
  echo "Fallo de la creacion de la tabla clientes: (" . $conn->errno . ") " . $conn->error . "------ ";
}     
if (!$conn->query("DROP TABLE IF EXISTS pedidos") ||
(!$conn->query("CREATE TABLE pedidos  (id_pedidos INT PRIMARY KEY, fecha_pedido DATE, fechaentrega DATE, 
id_clientes INT,  id_articulos INT, FOREIGN KEY id_clientes, FOREIGN KEY id_articulos))") ||
!$conn->query("INSERT INTO pedidos VALUES (1, '2020-07-06', '2020-07-08', 1, 1)"))) {
  echo "Fallo de la creacion de la tabla pedidos: (" . $conn->errno . ") " . $conn->error . "------ ";
}
if (!$conn->query("DROP TABLE IF EXISTS ticket") ||
(!$conn->query("CREATE TABLE ticket  (id_ticket INT PRIMARY KEY, total VARCHAR(10), id_sucursales INT, FOREIGN KEY id_sucursales)") ||
!$conn->query("INSERT INTO ticket VALUES (1, '$359.99', 1)"))) {
  echo "Fallo de la creacion de la tabla ticket: (" . $conn->errno . ") " . $conn->error . "------ ";
}


?>
