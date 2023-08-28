<!-- Conexion base de datos PHP -->
<?php
        $enlace = mysqli_connect("localhost","root","","tce");
        if(!$enlace){
            die("Conexion no exitosa en base de datos". mysqli_error());
        }
        echo "conxion exitosa";
        mysqli_close($enlace);

// crear variables que ingresan a la base de datos
$name = $_POST['nombre'];
$lastname = $_POST['apellido'];
$date = $_POST['fecha'];
$restartDate = date('d, F, Y', strtotime($date));
$typeSex = $_POST['genero'];
$email = $_POST['email'];
$passw = $_POST['Contrasena'];

// consulta SQL para inseción de dato

$sql = INSERT into usuarios (nombre, apellido, fecha_nacimiento, genero, correo, contrasena, rol) values ('$name','$lastname', '$restartDate','$typeSex', '$email','$passw');

$enlace.close();
?>
