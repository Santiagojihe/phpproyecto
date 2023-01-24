<?php
//hacemos un llamado al archivo conexion
  include("conexion.php");
//creamos las variables
  $clave= $_POST['clave'];
  $usuario=$_POST['usuario'];

  $sql = "SELECT * from usuarios where passUsuario='$clave' and nomUsuario='$usuario'";

  //iniciamos validación para verificar usuario y contraseña guardadas en Mysql
  if($resultado = mysqli_query($conn, $sql)){

       if(mysqli_num_rows($resultado) > 0){
        //echo "Usuario correcto";
        //creamos constantes de la sesion para usar
        $datos = mysqli_fetch_array($resultado);
        $_SESSION['nombre'] = $datos['nomUsuario'];
        $_SESSION['clave'] = $datos['passUsuario'];
        $_SESSION['id'] = $datos['idUsuario'];

            header("Location: index.php");

        }else{
              ?>
                <script >
                alert("Datos incorrectos");
                window.location.href="index.php";
                </script>
              <?php
    }
            }
              ?>
              <script src="js/script.js"></script>

