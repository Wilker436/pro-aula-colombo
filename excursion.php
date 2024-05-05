<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excursiones</title>

    <link rel="stylesheet" href="excursion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="div-padre">

        <header class="header">

            <div class="menu margen-interno">
                <div class="logo">
                    <a href="index.html"><img src="imagenes/004.png" alt=""></a>
                </div>

                <div class="nav">
                    <a href="Index.php">Inicio</a>
                    <a href="nosotros.html">Nosotros</a>
                    <a href="excursion.php"  class="here">Excursiones</a>
                    <a href="#"  id="btn-abrir-modal" >Cuenta</a>
                </div>

                <div class="social">
                    <div><a href="#"><i class="fa-brands fa-twitter fa-2xl"></i></a></div>
                    <div><a href="https://www.instagram.com/senderodenomada/"><i
                                class="fa-brands fa-instagram fa-2xl"></i></a></div>
                </div>

            </div>

            <div class="new-Body">
                <div class="typewriter">
                    <br>
                    <br>
                    <h1>Grandes destinos, grandes experiencias</h1>

                </div>

            </div>
           
        </header>


        <section class="principal">
        <div class="excursiones">
                
                <?php
                   include 'php/database.php';
                           
                   $query = "SELECT Nombre, lider, fecha, precio, imagen, cupos FROM destinos";

                   $result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

                   while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                       echo "<div class='excursion'>";
                       echo "<h1 class=''>ꕤ " . $row['Nombre'] . " ꕤ</h1>";
                       echo "<img src='imagenes/Destinos/" . $row['imagen'] . "' alt='' class='imagenE'>";
                       echo "<h2 class='center'> " . $row['lider'] . "</h2>";
                       echo "<hr>";
                       echo "<h2 class=''> Fecha: " . $row['fecha'] . "</h2>";
                       echo "<h2 class=''> Precio: " . $row['precio'] . "</h2>";
                       echo "<h2 class=''> Cupos disponibles: " . $row['cupos'] . "</h2>";
                       echo "<hr>";
                       echo "<div class='excursionnn'>";
                       echo "<a href='excursion.php'>Más Información</a>";
                       echo "</div>";
                       echo "</div>";
                               }
                               
                 ?>


           </div>

        </section>

        <dialog id="modal">
            <h1>Inicio de Sesión</h1>
            <form method="dialog" >
                <label> 
                    Ingrese su Email: <input type="email" name="correo" required placeholder="Ej: SenderoNomada@gmail.com" class="textarea">
                </label>   
                <br>
                <label> 
                    Ingrese su Contraseña: <input type="password" name="contrasena" required placeholder="**********" class="textarea">
                </label> 
                <br>
                <button type="submit" class="submit-btn"> Iniciar </button>

            </form>
            <a href="#" id="btn-cerrar-modal" class="anclaM">Registrarse</a>
        </dialog>

        <dialog id="modal2">
            <h1>Registrarse</h1>
            <form method="dialog" >
                <label> 
                    Ingrese su Email: <input type="email" name="correo" required placeholder="Ej: SenderoNomada@gmail.com" class="textarea">
                </label>   
                <br>
                <label> 
                    Ingrese su Contraseña: <input type="password" name="contrasena" required placeholder="**********" class="textarea">
                </label> 
                <br>
                
                <button type="submit" class="submit-btn"> registrarse </button>

            </form>
        </dialog>



        <script>
            const btnAbrirModal =
            document.querySelector("#btn-abrir-modal");

            const btnCerrarModal =
            document.querySelector("#btn-cerrar-modal");

            const Modal =
            document.querySelector("#modal");

            const Modal2 =
            document.querySelector("#modal2");

            btnAbrirModal.addEventListener("click", ()=>{
                Modal.showModal();
            });

            btnCerrarModal.addEventListener("click", ()=>{
                Modal.close();
                Modal2.showModal();

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