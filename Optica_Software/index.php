<!DOCTYPE html>
<html>
    <head>
            <meta http-equiv="Content-Type"charset="utf-8">
            <title>Formulario De Contacto</title>
            <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <tbody><tr height="162px" valign="top">
				<td colspan="5"> <a href="index.html">
					<img src="image/Header.jpg" border="0" width="100%" height="187"></a>
				</td>
            </tr>
		</tbody>
    <header>
    <?php
        include("conexion.php");
         include("menu.php");
    ?>
    </header>
<br>
<br>
<br>
<section id="prueba5"> <table border="1" width="100%" height="355px">
    <tr>
        <TH colspan="3">
            <?php
                include("principal.php");
                include("subm.php");
            ?>
        </TH>
    </tr>
    <tr>
        <td colspan="2"width="">
        
        </td>

        <td rowspan="2"width="25%">
            <?php
            //operador ternario
            $page = isset($_GET["page"]) ? $_GET["page"] : "";
            $subm = isset($_GET["subm"]) ? $_GET["subm"] : "";

            switch($page){
                case 'Login':
                    include('Login.php');
                    break;
                case 'usuarios':
                    include('usuarios.php');
                    break;
                case 'productos':
                    include('productos.php');
                    break;
                case 'principal':
                    switch($subm){
                        case 'principal':
                            include('principal.php');
                            break;
                        case 'datos':
                            include('Datos.php');
                            break;
                            default:
                            echo"";
                            break;
                    }
                default:
                    include('men1.php');
            }
            ?>
        </td>
    </tr>
    <TR> 
   <TD width="25%"><?php
            $page = isset($_GET["page"]) ? $_GET["page"] : "";
            $scitas= isset($_GET["page"]) ? $_GET["page"] : "";
            switch($scitas){
                case 'citas':
                    include('citas.php');
                    break;
                case 'Lentes':
                    include('lentes.php');
                    break;
                case 'lcontacto':
                    include('lcontacto.php');
                    break;
                case 'monturas':
                    include('monturas.php');
                    break;
                    case 'datos':
                    include('Datos.php');
                    break;
                    default:
                    echo"";
                    break;}
                    
            ?></TD> 
   <TD>Dato 5</TD> 
</TR>
</table> </section>
<br>
<br>
    <section> <tr><td colspan="20">2</td></tr> </section>

        <article>3 </article>
        <aside> 4 </aside>
        <section id="prueba5"> 5 </section>
        <footer> 6 </footer>
        

       
     </body>
</html>