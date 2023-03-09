<?php
include("conexion.php");
$con = conexion();

//obtenemos cada dato del index

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

//creamos consulta
$sql = "INSERT INTO user VALUES ('$id','$nombre','$apellido','$username',
'$password','$email')";
$query= mysqli_query($con,$sql);

/*si se selecciona en el boton agregar usuario se agg y
redericciona a el index*/

if($query){
    header("Location:index.php");

}




?>