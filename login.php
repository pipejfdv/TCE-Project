<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "tce";

$enlace = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

if (!$enlace) {
    die("Conexión no exitosa en la base de datos: " . mysqli_connect_error());
}

$correo_login = mysqli_real_escape_string($enlace, $_POST['email']);
$contrasena_login = $_POST['Contrasena'];

$sql_login = "SELECT * FROM usuarios WHERE correo = '$correo_login'";
$sql_login = "SELECT * FROM usuarios WHERE contrasena = '$contrasena_login'";


$resultado_login = mysqli_query($enlace, $sql_login);

if (mysqli_num_rows($resultado_login) == 1) {
    $fila = mysqli_fetch_assoc($resultado_login);
    if (password_verify($contrasena_login, $fila['contrasena'])) {
        echo "Inicio de sesión exitoso";
        header("Location: Index.html");
        exit;
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

mysqli_close($enlace);
?>
