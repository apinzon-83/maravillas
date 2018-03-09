<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "root";
$db_name = "maravilladb";
$tbl_name = "Usuarios";

// $form_pass = $_POST['password'];

// $hash = password_hash($form_pass, PASSWORD_BCRYPT);

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
die("La conexion falló: " . $conexion->connect_error);
}




?>
