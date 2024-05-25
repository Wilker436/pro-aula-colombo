<?php
session_start();

if (empty($_SESSION["id"])) {
    header("location: login.php");
}
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


    <title>Carrito</title>

</head>
<body>


    <div class="div-padre">
        <header class="header">

            <div class="menu margen-interno">
                <div class="logo">
                    <a href="index.php"><img src="imagenes/004.png" alt=""></a>
                </div>

                <div class="nav">
                
                    <a href="Index.php" class="here">Inicio</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="excursion.php">Excursiones</a>
                    <a href="#" id = "btn-abrir-modal">Cuenta</a>; 
                </div>

                <div class="social">
                    <div><a href="#"><i class="fa-brands fa-twitter fa-2xl"></i></a></div>
                    <div><a href="https://www.instagram.com/senderodenomada/"><i class="fa-brands fa-instagram fa-2xl"></i></a></div>
                </div>

            </div>

            <div class="new-Body">
                <div class="typewriter">
                    <br>
                    <br>
                    <h1>Carrito</h1>

                </div>

            </div>

        </header>


        <section class="principal">


                <h1 class="ED"> ꕤ Tus excursiones ꕤ</h1>


                <div class="reservas">

                    <?php
                         include 'php/database.php';
                         $id_usuario = $_SESSION["id"];

                         $query = "SELECT excursion, precio, lider, fecha, imagen, idReserva FROM carrito  WHERE idUsuario=". $id_usuario. "";


                         $result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

                         $subtotal = 0;

                         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                            echo "<div class='excursion'>";
                            echo "<h1 class=''>ꕤ " . $row['excursion'] . " ꕤ</h1>";
                            echo "<img src='imagenes/Destinos/" . $row['imagen'] . "' alt='' class='imagenE'>";
                            echo "<h2 class='center'> " . $row['lider'] . "</h2>";
                            echo "<hr>";
                            echo "<h2 class=''> Fecha: " . $row['fecha'] . "</h2>";
                            echo "<h2 class=''> Precio: " . $row['precio'] . "</h2>";
                            echo "<hr>";
                            echo "<form method='POST' action='php/eliminarCarrito.php'>";
                            echo "<input style='visibility:hidden;' type='text' name='id' readonly  value='".$row['idReserva']."'>";
                            echo "<input style='visibility:hidden;' type='text' name='destino' readonly  value='".$row['excursion']."'>";
                            echo "<div class='controlC'> <button type='submit' class='submit-btn'> Eliminar </button></div>";   
                            echo "</form>"; 
                            $subtotal += $row['precio'];
                            
                            echo "</div>";
                        }
                        $impuestos = $subtotal * 0.19;
                        $total = $subtotal + $impuestos;


                        echo "
                              <div class='precios'>  


                              <div class='dates'>
                              <h1>Datos personales</h1>
                                email: ".$_SESSION["email"]."<br>
                                nombres: ".$_SESSION["nombres"]."<br>
                                apellidos: ".$_SESSION["apellidos"]."<br>
                                nacionalidad: ".$_SESSION["Nacionalidad"]."
                              </div>

                              <div class='fac'>
                              <h1>Factura</h1>
                              Subtotal: " . $subtotal . "<br>
                              Impuestos (19%): " . $impuestos . "<br> 
                              Total: " . $total . "
                              </div>

                              <div class='pagar'>
                                <a href='https://www.paypal.com/paypalme/Wilker436' class='pagar-btn'>Pagar</a>
                                <a href='factura.php' class='pagar-btn'>factura</a>
                              </div>

                              </div>
                        ";

                    ?>

                </div>


        </section>


        <dialog id="modal">
            <?php	
            echo "<h1 class='bv'>  Bienvenido/a " . $_SESSION["nombres"] . " ". $_SESSION['apellidos']. "</h1> <br>";

            echo "
            <div  class='informacionUsuario'>
            <h2 class='Infor'>Datos personales</h2>
            <li>
                <ol>Correo: ". $_SESSION["email"]."</ol>
                <ol>Contraseña: ".$_SESSION["contraseña"] ."</ol>
                <ol>Nacionalidad: ".$_SESSION["Nacionalidad"] ."</ol>
                <ol>Edad: ".$_SESSION["edad"] . "</ol>
                <ol>Numero telefonico: ".$_SESSION["celular"] ."</ol>
            </li>
            </div>             
            ";                    
    
            ?>

            <br>
            <div class="controlC">          
            <center><a href="php/controlador_cerrar_session.php" class="submit-btn b2">Cerrar sesion</a></center>
            </div>
           


        </dialog>



        <script>
            const btnAbrirModal =
            document.querySelector("#btn-abrir-modal");

            const Modal =
            document.querySelector("#modal");


            btnAbrirModal.addEventListener("click", ()=>{
                Modal.showModal();
            });

        </script>


        
        <footer class="footer margen-interno">
            <nav class="pie">
                <a href="#">Desarrollado por Wavy </a>
            </nav>
        </footer>



    </div>
    
</body>
</html>