<?php
//hacemos un llamado al archivo conexion
include ("conexion.php");
if( !isset($_SESSION['nombre']) || $_SESSION['nombre']=='' ){
	//exit(0);
	header('location: index.php');
}
	//recupemos las variables
	$nom=$_POST['nom'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	//hacemos la sentencia de sql
	$sql = "INSERT INTO usuarios (nomUsuario, emailUsuario, passUsuario) VALUES ('$nom', '$email','$pass')";
	
	//iniciamos validación para verificar que se guardaron los datos
if (mysqli_query($conn, $sql)) {
	  echo "Datos guardados con EXITO";
	  //cerramos la sentencia de sql
mysqli_close($conn);
header('location: Datos.php');
} else {
	"Error: " . $sql . "<br>" . mysqli_error($conn);
	   Echo "No se pudieron guardar los datos, verifique la informacion<br><br>";
}

?>