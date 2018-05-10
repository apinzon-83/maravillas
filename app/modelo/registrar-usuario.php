<?php
// require("conexion.php");
 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "root";
 $db_name = "maravilladb";
 $tbl_name = "Usuarios";

 $form_pass = $_POST['password'];

 $hash = password_hash($form_pass, PASSWORD_BCRYPT);

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}



 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE  email = '$_POST[email]'";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);
 // echo $buscarUsuario;
 // echo $count;
 if ($count == 1) {
 // echo "<br />". "El correo que quieres ingresar ya se encuentra registrado" . "<br />";
echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
 echo '<script type="text/javascript">alert(\'El correo  que quieres ingresar ya se encuentra registrado\');</script>';
 // echo "<a href='../../registration_form.php'>Por favor escoga otro Nombre</a>";
 echo "<script>location.href='../../registration_form.php'</script>";


 }
 else{

 $query = "INSERT INTO usuarios (idrol, nombre, apellidoP, apellidoM, usuario, password, email, telefono, genero, enteraste)
           VALUES ('$_POST[idrol]', '$_POST[nombre]', '$_POST[apellidoP]', '$_POST[apellidoM]', '$_POST[usuario]', '$hash', '$_POST[email]', '$_POST[telefono]', '$_POST[genero]', '$_POST[enteraste]')";

 if ($conexion->query($query) === TRUE) {

 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenidos: " . $_POST['usuario'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='../../login.php'>Login</a>" . "</h5>";
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
   }
 }
 mysqli_close($conexion);
?>
