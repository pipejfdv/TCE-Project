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

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$fechaNacimiento = date('Y-m-d', strtotime($fecha)); 
$genero = $_POST['genero'];
$correo = $_POST['email'];
$contrasena = $_POST['Contrasena'];
$rol = $_POST['rol'];

// Consulta SQL para la inserción de datos
$sql = "INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, genero, correo, contrasena, rol) VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$genero', '$correo', '$contrasena', '$rol')";

if ($enlace->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $enlace->error;
}
// Cerrar la conexión a la base de datos
mysqli_close($enlace);
?>

