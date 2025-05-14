<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

/*$conexion = mysqli_connect ("localhost","root","","curso_wordpress_y_php") or exit ("No se pudo conectar a la base de datos");*/

$conexion = mysqli_connect ('sql101.infinityfree.com','if0_38668503','RWmRMFE51sOBYq','if0_38668503_worpress_php') or exit ('No se pudo conectar a la base de datos');

mysqli_query ($conexion , "INSERT INTO clientes VALUES (DEFAULT, '$nombre_form' ,'$apellido_form' ,'$email_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?ok");
?>
