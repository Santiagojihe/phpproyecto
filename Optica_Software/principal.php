<?php
if( !isset($_SESSION['nombre']) || $_SESSION['nombre']=='' ){
    //exit(0);
}else{
    echo "Bienvenid@: ". $_SESSION['nombre'].". ";


if($_SESSION['id'] == 1){
    echo "Usted es administrador";
    echo"
    <a href='facturar.php'>Facturar</a> |
    <a href='cotizar.php'>Cotizar</a> |
    <a href='index.php?page=datos'>Registrar</a><br/>
        ";
}
else if($_SESSION['id'] == 2){
    echo "Usted es cajero";
    echo "
    <a href='facturar.php'>Facturar</a> |
    <a href='cotizar.php'>Cotizar</a> |
    <a href='mis_datos.php'>Mis datos</a> | 
    ";
}
else{
    echo "nada";
}
}
?>