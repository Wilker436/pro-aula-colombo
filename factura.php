<?php
session_start();

if (empty($_SESSION["id"])) {
    header("location: login.php");
}

ob_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="carrito.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body class="facv">

            <center>
                
                <h1 class='facv'>Factura</h1>
               
                

                    <?php
                         include 'php/database.php';
                         $id_usuario = $_SESSION["id"];

                         $query = "SELECT excursion, precio, lider, fecha, imagen, idReserva FROM carrito  WHERE idUsuario=". $id_usuario. "";


                         $result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

                         $subtotal = 0;

                         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                            echo "<h2 class='facv'> Destino:" . $row['excursion'] . "</h2>";
                            echo "<h3 class='facv'> Lider:" . $row['lider'] . "</h3>";
                            echo "<h3 class='facv'> Fecha: " . $row['fecha'] . "</h3>";
                            echo "<h3 class='facv'> Precio: " . $row['precio'] . "</h3>";
                            $subtotal += $row['precio'];  
                            echo "<br>";

                        }

                        $impuestos = $subtotal * 0.19;
                        $total = $subtotal + $impuestos;


                        echo "
                              <div class='facv'>

                              <h1>Datos personales</h1>
                                email: ".$_SESSION["email"]."<br>
                                nombres: ".$_SESSION["nombres"]."<br>
                                apellidos: ".$_SESSION["apellidos"]."<br>
                                nacionalidad: ".$_SESSION["Nacionalidad"]."
                              </div>

                              <br>
                              <div class='facd'>
                              <h1>Montos</h1>
                              Subtotal: " . $subtotal . "<br>
                              Impuestos (19%): " . $impuestos . "<br> 
                              Total: " . $total . "
                              </div>
                        ";

                    ?>
    
            </center>
</body>
</html>

<?php
$html = ob_get_clean();
// echo $html;


require_once 'libreria/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();


$option = $dompdf->getOptions();
$option->set(array('isRemoteEneabled' => true));
$dompdf->setOptions($option);


$dompdf->loadhtml($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("factura.pdf", array("Attachment"=>false));


?>