<?php
//hacemos un llamado al archivo conexion
  include("conexion.php");
//creamos las variables
  $doc= $_POST['documento'];

  $sql = "SELECT * from clientes where idClientes='$doc'";

  //iniciamos validación para verificar usuario y contraseña guardadas en Mysql
  if($resultado = mysqli_query($conn, $sql)){

       if(mysqli_num_rows($resultado) > 0){
        //echo "Usuario correcto";
        //creamos constantes de la sesion para usar
        $datos = mysqli_fetch_array($resultado);
        $_SESSION['documento'] = $datos['idClientes'];
        $_SESSION['cliente'] = $datos['nomCliente'];

            header("Location: index.php");

        }else{
            ?>
                <script >
                alert("Documento no existe");
                window.location.href="crear.php";
                </script>
              <?php
    }
    }else{
    echo "error";
    }
              ?>
              <script src="js/script.js"></script>
