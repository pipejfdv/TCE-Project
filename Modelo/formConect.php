<?php
// Establecer la conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "tce";

$enlace = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

if (!$enlace) {
    die("Conexión no exitosa en la base de datos: " . mysqli_connect_error());
}
?>





