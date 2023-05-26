<!-- Conexion base de datos PHP -->
<?php
        $enlace = mysqli_connect("localhost","root","","tce");
        if(!$enlace){
            die("Conexion no exitosa en base de datos". mysqli_error());
        }
        
// función del boton de registro


if(isset($_GET['registrarse'])){
    // crear variables que ingresan a la base de datos
    
    
    $name = $_GET['nombre'];
    $lastname = $_GET['apellido'];
    $date = $_GET['fecha'];
    $restartDate = date('Y-m-d', strtotime($date));
    $typeSex = $_GET['genero'];
    $email = $_GET['email'];
    $passw = $_GET['Contrasena'];
    $rol = $_GET['rol'];

    // consulta SQL para inseción de dato

    $insertDB = "INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, genero, correo, contrasena, rol) 
    values ('$name','$lastname', '$restartDate','$typeSex', '$email','$passw', '$rol')";

    // envio de datos
    $insertar = mysqli_query($enlace, $insertDB);
    // var_dump($insertDB);
    // comprobar

    if(!$insertar){
        echo "Error en la linea: ".mysqli_error($enlace);;
    }
    
}

mysqli_close($enlace);
?>
