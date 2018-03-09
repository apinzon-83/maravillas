<?php
// require("conexion.php");
 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "root";
 $db_name = "maravilladb";
 $tbl_name = "Usuarios";

 //$form_pass = $_POST['password'];
 //$hash = password_hash($form_pass, PASSWORD_BCRYPT);

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}



 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE  email = '$_POST[email]'";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {

echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
 echo '<script type="text/javascript">alert(\'El correo  que quieres ingresar ya se encuentra registrado\');</script>';

 echo "<script>location.href='registration_form.php'</script>";


 }
 else{
 $idrol = 'Usuario';
 $query = "INSERT INTO usuarios (idrol, nombre, apellidoP, apellidoM, usuario, password, email, telefono, genero, enteraste)
           VALUES ('$idrol', '$_POST[nombre]', '$_POST[apellidoP]', '$_POST[apellidoM]', '$_POST[usuario]', '$_POST[password]', '$_POST[email]', '$_POST[telefono]', '$_POST[genero]', '$_POST[enteraste]')";

 if ($conexion->query($query) === TRUE) {

 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['usuario'] . "</h4>" . "\n\n";
 echo "<h5>"  . "<a href='login.php'>Ingresar</a>" . "</h5>";
 echo $query;
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
   }
 }
 mysqli_close($conexion);
?>
