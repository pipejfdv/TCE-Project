<?php
require('formConect.php');

if (isset($_POST['login'])) {
    // Se obtienen los datos enviados al formulario
    $usuario_login = mysqli_real_escape_string($enlace, $_POST['usuario']);
    $contrasena_login = $_POST['contrasena'];

    // Se genera la consulta a la base de datos
    $sql_login = "SELECT contrasena FROM usuarios WHERE correo = '$usuario_login'";
    $resultado = mysqli_query($enlace, $sql_login);

    if ($resultado) {
        if ($fila = mysqli_fetch_assoc($resultado)) {
            $contrasena_encriptada = $fila['contrasena'];
    
            // Comparamos la contraseña ingresada con la contraseña encriptada en la base de datos
            if (password_verify($contrasena_login, $contrasena_encriptada)) {
                // Consulta para obtener el nombre de usuario
                $sql_get_username = "SELECT nombre FROM usuarios WHERE correo = '$usuario_login'";
                $resultado_username = mysqli_query($enlace, $sql_get_username);
    
                if ($fila_username = mysqli_fetch_assoc($resultado_username)) {
                    $nombre_usuario = $fila_username['nombre'];
    
                    // Ahora tienes el nombre de usuario, puedes mostrarlo en el HTML
                }
    
                // Redirige a la página de ingreso
                header("Location: paginas/ingreso.php");
            } else {
                echo 'Credenciales Incorrectas';
            }
        } else {
            echo "Usuario no encontrado";
        }
    } else {
        echo "Error: " . $sql_login . "<br>" . mysqli_error($enlace);
    }
    
}
?>