<?php
require('formConect.php');

// Obtener datos del formulario
$nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
$apellido = mysqli_real_escape_string($enlace, $_POST['apellido']);
$fecha = $_POST['fecha'];
$fechaNacimiento = date('Y-m-d', strtotime($fecha)); 
$genero = mysqli_real_escape_string($enlace, $_POST['genero']);
$correo = mysqli_real_escape_string($enlace, $_POST['email']);
$contrasena = $_POST['Contrasena'];
$rol = mysqli_real_escape_string($enlace, $_POST['rol']);

// Hashear la contraseña
$passhash = password_hash($contrasena, PASSWORD_BCRYPT);

// Consulta SQL para la inserción de datos
$sql = "CALL InsertarUsuarios ('$nombre', '$apellido', '$fechaNacimiento', '$genero', '$correo', '$passhash', '$rol')";

if ($enlace->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . mysqli_error($enlace);
}

// No es necesario cerrar la conexión aquí si deseas usarla más adelante.

header("Location: paginas/Ingres&Registro.html");
?>
