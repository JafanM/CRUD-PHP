<?php
include("conexion.php");
$con = conexion();


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

//creamos consulta
$sql = "UPDATE user SET nombre='$nombre', apellido='$apellido', username='$username',
password='$password',email='$email' WHERE id='$id'";

$query= mysqli_query($con,$sql);

/*si se selecciona en el boton agregar usuario se agg y
redericciona a el index*/

if($query){
    header("Location:index.php");

}






?>