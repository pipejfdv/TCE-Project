<!-- Conexion base de datos PHP -->
<?php
        $enlace = mysqli_connect("localhost","root","","tce");
        if(!$enlace){
            die("Conexion no exitosa en base de datos". mysqli_error());
        }
        echo "conxion exitosa";
        
// función del boton de registro

if(isset($_POST['registrarse'])){
    // crear variables que ingresan a la base de datos
    echo "ejecutando codigo";
    var_dump($name);
    $name = $_POST['nombre'];
    $lastname = $_POST['apellido'];
    $date = $_POST['fecha'];
    $restartDate = date('Y-m-d', strtotime($date));
    $typeSex = $_POST['genero'];
    $email = $_POST['email'];
    $passw = $_POST['Contrasena'];
    $rol = $_POST['rol'];

    // consulta SQL para inseción de dato

    $insertDB = "INSERT INTO usuarios () 
    values ('$name','$lastname', '$restartDate','$typeSex', '$email','$passw', '$rol')";

    // envio de datos
    $insertar = mysqli_query($enlace, $insertDB);

    // comprobar

    if(!$insertar){
        echo "Error en la linea: ".mysqli_error($enlace);;
    }
    var_dump($name);
}

mysqli_close($enlace);
?>
