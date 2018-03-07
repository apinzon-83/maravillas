<?php
session_start();
?>

<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "maravilladb";
$tbl_name = "Usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM $tbl_name WHERE usuario = '$username'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password, $row['password'])) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href='../../panel-control.php'>Panel de Control</a>";

 } else {
   echo '<script type="text/javascript">alert(\'Username o Password estan incorrectos.\');</script>';
   echo "<script>location.href='../../login.php'</script>";
  //  echo "<br><a href='../../login.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion);
 ?>
