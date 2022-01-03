<?php 
$datos_db = mysqli_connect('localhost','root','','porfolio') or exit ('No se pudo acceder a la base de datos');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

mysqli_query($datos_db, "INSERT INTO contact VALUES (DEFAULT, '$nombre', '$email', '$mensaje')");

header("Location: index.php?ok");
?>