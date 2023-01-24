<?php
if( !isset($_SESSION['documento'])){
    //exit(0);

}else{
  echo "Bienvenid@: ". $_SESSION['cliente'].". ";
    echo"
    <a href='facturar.php'>Asignar Citas</a> |
    <a href='cotizar.php'>Cancelar Citas</a> |
    <a href='index.php?page=datos'>Registrar</a><br/>
        ";

}

?>