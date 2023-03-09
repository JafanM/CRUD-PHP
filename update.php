<?php
include("conexion.php");
$con = conexion();

$id =$_GET['id'];

$sql = "SELECT * FROM user WHERE id = '$id'"; 
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styleUpdate.css" rel="stylesheet">
    <title>Actualice el usuario</title>
</head>
<body>
    <div class="users-form">
        <h1>Actualice el usuario</h1>
        <form action="edit.php" method="POST">


            <input type="hidden" name="id" value=" <?= $row['id'] ?>" placeholder="Nombre">
             <input type="text" name="nombre" value=" <?= $row['nombre'] ?>" placeholder="Nombre">
            <input type="text" name="apellido" value=" <?= $row['apellido'] ?>" placeholder="Apellidos">
            <input type="text" name="username" value=" <?= $row['username'] ?>" placeholder="Username">
            <input type="password" name="password" value=" <?= $row['password'] ?>" placeholder="Password">
            <input type="email" name="email" value=" <?= $row['email'] ?>"  placeholder="Email">

            <input type="submit" value="Actualizar usuario">
            <input formaction ="index.php" type="submit" value="Cancelar">


        </form>



    </div>

    
</body>
</html>