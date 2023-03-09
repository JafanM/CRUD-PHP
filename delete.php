<?php
include("conexion.php");
$con = conexion();

$id=$_GET['id'];
$sql = "DELETE FROM user WHERE id='$id'";
$query = mysqli_query($con,$sql);

if($query){
    header("Location:index.php");
}




?>
