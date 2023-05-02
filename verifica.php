<?php

include('connection.php');

$username = $_POST['user'];
$password = $_POST['pass'];

//query sql
$sql = "select * from usuario where nombre = '$username' and contrasenia = '$password'"; //Nombre del query de la tabla, no el nombre de la tabla
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows();

if($count ==1){
echo "Login succesful";
}else{
echo "Invalid user or password";
}

function mi_funcion (a.b){
    
}
?>