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

if (mysqli_query($enlace, $sql)) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . mysqli_error($enlace);
}

header("Location: paginas/Ingres&Registro.html");

// Cerrar la conexión a la base de datos
mysqli_close($enlace);
?>




