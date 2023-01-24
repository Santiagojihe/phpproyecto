<?php
//creamos la sesion
session_name("Optica");
session_start();

//creamos las variables
	$servername = "localhost";
	$username = "root";
	$database = "optica";
	$password = "1234";
	
	// Creamos la conexion
	$conn = mysqli_connect($servername, $username, $password, $database);

	//verificamos la conexion
	if (!$conn) {
		die("Conexion fallida: " .mysqli_connect_error());
  }
   
?>