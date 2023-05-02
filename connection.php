<?php
$host = "localhost"; //Usar el punto y coma OBLIGATORIAMENTE en todo
$user = "root";
$password = "";
$db_name = "usuarios" /* Nombre de la tabla que vamos a usar en sql*/

//Connection string
$con = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()){ //errno es el trycatch de php, así se escribe tal cual
die("Failed to connect with MySQL: " . mysqli_connect_error()); //se usa el punto para concatenar en php
}
?>