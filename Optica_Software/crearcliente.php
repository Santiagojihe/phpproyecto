<?php
//hacemos un llamado al archivo conexion
include ("conexion.php");
	//recupemos las variables
    $numero=$_POST['numero'];
    $tipoid=$_POST['tipoid'];
    $nombre=$_POST['nombre'];
    $nacimiento=$_POST['nacimiento'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    
    $sql = "SELECT * from clientes where idClientes";
    
    if($resultado = mysqli_query($conn, $sql)){

        if(mysqli_num_rows($resultado) > 0){
         //creamos constantes de la sesion para usar
         $datos = mysqli_fetch_array($resultado);
         $_SESSION['numero'] != $datos['idClientes'];
 
             //hacemos la sentencia de sql
    $sql = "INSERT INTO clientes (idClientes, tipoid, nomCliente,fechaCliente, teleCliente, dirCliente) VALUES 
    ('$numero','$tipoid','$nombre','$nacimiento','$telefono','$direccion')";
    
	
	//iniciamos validación para verificar que se guardaron los datos
if (mysqli_query($conn, $sql)) {
      echo "Datos guardados con EXITO";
} else {
	"Error: " . $sql . "<br>" . mysqli_error($conn);
	   Echo "No se pudieron guardar los datos, verifique la informacion<br><br>";
}
//cerramos la sentencia de sql
 
         }else{
             ?>
                 <script >
                 alert("Documento no existe");
                 window.location.href="crear.php";
                 </script>
               <?php
     }
    }

	

?>