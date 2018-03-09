<?php
session_start();
?>

<?php
require("conexion.php");
$email = $_POST['username'];
//$username = $_POST['username'];
$password = $_POST['password'];



$sql2=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email = '$email'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($password==$f2['passPartner']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['username']=$f2['username'];
			$_SESSION['idrol']=$f2['idrol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";

		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email = '$email'");
	if($f=mysqli_fetch_assoc($sql)){
		if($password==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['username']=$f['username'];
			$_SESSION['idrol']=$f['idrol'];

       echo '<script>alert("BIENVENIDO usuario")</script> ';
			header("Location: usuario.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

			echo "<script>location.href='index.php'</script>";
		}
	}else{

		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';

		echo "<script>location.href='index.php'</script>";

	}

//
// $sql = "SELECT * FROM $tbl_name WHERE usuario = '$username'";
// $result = $conexion->query($sql);
// if ($result->num_rows > 0) {
//  }
//  $row = $result->fetch_array(MYSQLI_ASSOC);
//  if (password_verify($password, $row['password'])) {
//
//     $_SESSION['loggedin'] = true;
//     $_SESSION['username'] = $username;
//     $_SESSION['start'] = time();
//     $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
//
//     echo "Bienvenido! " . $_SESSION['username'];
//     echo "<br><br><a href='../../panel-control.php'>Panel de Control</a>";
//
//  } else {
//    echo '<script type="text/javascript">alert(\'Username o Password estan incorrectos.\');</script>';
//    echo "<script>location.href='../../login.php'</script>";
//   //  echo "<br><a href='../../login.php'>Volver a Intentarlo</a>";
//  }
 mysqli_close($conexion);
 ?>
