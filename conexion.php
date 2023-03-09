<?php 
function conexion (){
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $bd = 'usuario_crud';

    //generando la conexion
    $connect = mysqli_connect($host,$user,$password);
    mysqli_select_db($connect,$bd);

    return $connect;
}






?>