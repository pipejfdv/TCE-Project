<?php
$enlace = mysqli_connect("localhost", "root", "", "funnymind");

if (!$enlace) {
    die("Conexión no exitosa en la base de datos" . mysqli_error($enlace));
}

echo "Conexión exitosa";

// Crear variables que reciben datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$fechaNacimiento = date('Y-m-d', strtotime($fecha)); 
$genero = $_POST['genero'];
$correo = $_POST['email'];
$contrasena = $_POST['Contrasena'];

// Consulta SQL para la inserción de datos
$sql = "INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, genero, correo, contrasena, rol) VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$genero', '$correo', '$contrasena', 'usuario')";

if (mysqli_query($enlace, $sql)) {
    echo "Registro insertado exitosamente";
} else {
    echo "Error al insertar registro: " . mysqli_error($enlace);
}

mysqli_close($enlace);
?>
