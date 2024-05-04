
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">


    <title>SenderoDeNomada</title>

    <!-- swipper css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">
    
</head>

<body>
    <div class="div-padre">
        <header class="header">

            <div class="menu margen-interno">
                <div class="logo">
                    <a href="index.html"><img src="imagenes/004.png" alt=""></a>
                </div>

                <div class="nav">
                 
                    <a href="Index.html" class="here">Inicio</a>
                    <a href="nosotros.html">Nosotros</a>
                    <a href="#">Excursiones</a>
                    <a href="#">Cuenta</a>
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
                    <h1>¡¡PREPARATE PARA UNA EXPERIENCIA INOLVIDABLE!!</h1>

                </div>

            </div>

        </header>

        <section class="principal">


            <div class="contenedor">

                <div class="imagen">
                    <img src="imagenes/people.jpg" alt="">

                </div>


                <div class="textx">

                    <h1 class="h11">Bienvenidos a sendero de nomada</h1>
                    <p class="p2">Estamos aquí para convertir tus sueños de viaje en realidades emocionantes. Explora
                        los rincones más fascinantes del mundo, donde la naturaleza y la cultura se entrelazan en una
                        danza cautivadora. Con nuestro equipo de expertos, cada viaje es una experiencia única y
                        memorable. ¿Listo para embarcarte en tu próxima aventura inolvidable?</p>

                    <div class="ab">
                        <center><a href="nosotros.html">Conocenos</a></center>
                    </div>
                </div>
            </div>


            <h1 class="ED"> ꕤ Excursiones Destacadas ꕤ</h1>

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
                        echo "<a href='excursion.hmtl'>Más Información</a>";
                        echo "</div>";
                        echo "</div>";
                                }
                                
                  ?>


            </div>

            <div class="reseña">
                <div class="DejarReseña">
                    <h1 class="rsñ">Deja tu opinion sobre nosotros</h1>
                    <form action="php/Reseña.php" method="post" class="formularioReseñas">
                        Deje su nombre: <input type="text" name="Nombre" required placeholder="Ej: Juan Esteban" class="textarea">
                        <br>
                        Deje su opinion: <input type="text" name="Reseña" required placeholder="Ej: Lorem ipsum dolor sit amet." class="textarea2">
                        <br>    
                        
                        <center><input type="submit" value="Dejar opinion" class="submit-btn"></center>
                    </form>
                </div>
                
                <div class="container swiper">
                    <div class="slide-container">
                        <div class="card-wrapper swiper-wrapper">
                            <?php
                                include 'php/database.php';
                            
                                $query = "SELECT nombre, opiniones FROM resenas";

                                $result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

                                while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                                    
                                    echo "<div class='card swiper-slide'>";
                                    echo "<h1 class='H1N'> Reseña de: " . $row['nombre'] . "</h1>";
                                    echo "<img src='imagenes/chat.png' alt='' class='imagenR'>";
                                    echo "<p class='Opi'>" . $row['opiniones'] . "</p>";
                                    echo "</div>";
                                }
                                
                            ?>
                        </div>  
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>  
                    </div>  
                </div>

                <script src="swiper-bundle.min.js"></script>
                <script src="script.js"></script>
            </div>

            <div class="aventuras">
                <h1 class="prox">Próximas Aventuras</h1>
                <h3>Introduce tu correo electrónico acontinuación para recibir actualizaciones</h3>
                <center>
                    <form action="php/proyecto.php" method="post">
                        <input type="email" name="correo" required placeholder="Ej: SenderoNomada@gmail.com"
                            class="textarea">
                        <br>
                        <input type="submit" value="Registrar" class="submit-btn">
                    </form>
                </center>

            </div>

        </section>

        <footer class="footer margen-interno">
            <nav class="pie">
                <a href="#">Desarrollado por Wavy </a>
            </nav>
        </footer>

    </div>

</body>

</html>