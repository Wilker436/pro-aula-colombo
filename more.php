<?php
session_start();

if (empty($_SESSION["id"])) {
    header("location: login.php");
    exit;
}

if (isset($_GET['parametro'])) {
    $parametro = $_GET['parametro'];
} else {
    $parametro = '';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

<script>

function obtenerParametro(nombre) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(nombre);
}

document.addEventListener('DOMContentLoaded', function() {
    const parametro = obtenerParametro('parametro');
    const banner = document.getElementById('banner');

    // Selecciona el botón por su ID
    document.getElementById('reservaBtn').addEventListener('click', function() {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'php/insertarCarrito.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                alert('Reserva realizada con éxito');
            } else {
                alert('Error al realizar la reserva');
            }
        };
        xhr.send(`destino=${encodeURIComponent(parametro)}`);
    });
});


</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="masinformacion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
    <title>Mas informacion</title>
</head>
<body>

    <div class="div-padre">
        <header class="header">

            <div class="menu margen-interno">
                <div class="logo">
                    <a href="index.php"><img src="imagenes/004.png" alt=""></a>
                </div>

                <div class="nav">       
                        <a href="Index.php">Inicio</a>
                        <a href="nosotros.php">Nosotros</a>
                        <a href="excursion.php">Excursiones</a>
                        <a href="#" id="btn-abrir-modal">Cuenta</a>
                    </div>

                <div class="social">
                    <div><a href="https://x.com/senderoDeNomada"><i class="fa-brands fa-twitter fa-2xl"></i></a></div>
                    <div><a href="https://www.instagram.com/senderodenomada/"><i class="fa-brands fa-instagram fa-2xl"></i></a></div>
                </div>

            </div>
        </header>
        
        <div class="div-padre" id="divpadre">
                <?php
                include 'php/database.php';

                $parametro = mysqli_real_escape_string($conexion, $parametro);
                $query = "SELECT * FROM destinos WHERE Nombre='$parametro'";
                $result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

                if($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                    echo "<div class='".$row['divBackground']."'>";
                    echo '
                    <div class="new-Body">
                    <div class="typewriter">
                        <br>
                        <br>
                        <h1>'.$row['textoBienvenida'].'</h1>
    
                    </div>
                    </div>


                    <section class="principal">

                        <div class="text-principal">
                            <h2> '.$row['textoPrincipal'].' </h2>
                        </div>

                        <div class="Excursion" id="Excursion">
            
                            <img src="imagenes/Destinos/'.$row['imagen'].'" alt="" id="imga" class="imagen">
            
                            <div class="datos" id="datos">
            
                                <h1 class="titulo">ꕤ'.$row['Nombre'].'ꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: '.$row['lider'].' <br>
                                    -Fecha: '.$row['fecha'].' <br> 
                                    -Duracion: 1 semana <br>
                                    -Precio: $'.$row['precio'].'
                                </p>
                                <button type="submit" class="btn" id="reservaBtn"> Reserva </button>
                            </div>

                        </div>

                        <section class="container">
                            <div class="informacion">
                            <div class="contenedor">
                                <div class="textx">
        
                                    <h1 class="h11">Incluidos</h1>
                                    <ul class="p2">
                                        <li>Lider de expedicion </li>
                                        <li>Alojamiento </li>
                                        <li>Desayunos, almuerzos, meriendas y cenas </li>
                                        <li>Transporte durante la expedición </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contenedor">
                                <div class="textx">
        
                                    <h1 class="h11">No Incluidos</h1>
                                    <ul class="p2">
                                        <li> Vuelos</li>
                                        <li>Gastos personales</li>
                                        <li>Tramites de visado</li>
                                        <li>Gastos derivados de sucesos inesperados, ya sean por partes de terceros o de
                                            carácter
                                            meteorológico (retrasos, cancelaciones, inundaciones, desprendimientos, nevadas,
                                            desastres naturales, etc)</li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </section>


                        <section class="container">
        
                        <div class="texto-Excursiones">
                            <h1 class="visitar">
                                ꕤ'.$row['Lugar1'].'ꕤ
                            </h1>
        
                        </div>
        
                        <div class="slider-wrapper">
        
                            <div class="slider" id="slider">
                                <img id="slide-1" src="imagenes/lugares/'.$row['fotoLugar11'].'" alt="">
                                <img id="slide-2" src="imagenes/lugares/'.$row['fotoLugar12'].'" alt="">
                                <img id="slide-3" src="imagenes/lugares/'.$row['fotoLugar13'].'" alt="">
                                <img id="slide-4" src="imagenes/lugares/'.$row['fotoLugar14'].'" alt="">
                            </div>
                            <div class="slider-nav">
                                <a href="#slide-1"></a>
                                <a href="#slide-2"></a>
                                <a href="#slide-3"></a>
                                <a href="#slide-4"></a>
                            </div>
                        </div>
        
        
                        </section>


                        <section class="container">
        
        
                        <div class="slider-wrapper">
        
                            <div class="slider" id="slider">
                                <img id="slide2-1" src="imagenes/lugares/'.$row['fotoLugar21'].'" alt="">
                                <img id="slide2-2" src="imagenes/lugares/'.$row['fotoLugar22'].'" alt="">
                                <img id="slide2-3" src="imagenes/lugares/'.$row['fotoLugar23'].'" alt="">
                                <img id="slide2-4" src="imagenes/lugares/'.$row['fotoLugar24'].'" alt="">
                            </div>
                            <div class="slider-nav2">
                                <a href="#slide2-1"></a>
                                <a href="#slide2-2"></a>
                                <a href="#slide2-3"></a>
                                <a href="#slide2-4"></a>
                            </div>
                        </div>
        
                        <div class="texto-Excursiones2">
                            <h1 class="visitar">
                                ꕤ'.$row['Lugar2'].'ꕤ
                            </h1>
        
                        </div>
        
                        </section>


                        <section class="container">
        
                        <div class="texto-Excursiones">
                            <h1 class="visitar">
                                ꕤ'.$row['Lugar3'].'ꕤ
                            </h1>
        
                        </div>
        
                        <div class="slider-wrapper">
        
                            <div class="slider" id="slider">
                                <img id="slide3-1" src="imagenes/lugares/'.$row['fotoLugar31'].'" alt="">
                                <img id="slide3-2" src="imagenes/lugares/'.$row['fotoLugar32'].'" alt="">
                                <img id="slide3-3" src="imagenes/lugares/'.$row['fotoLugar33'].'" alt="">
                                <img id="slide3-4" src="imagenes/lugares/'.$row['fotoLugar34'].'" alt="">
                            </div>
                            <div class="slider-nav">
                                <a href="#slide3-1"></a>
                                <a href="#slide3-2"></a>
                                <a href="#slide3-3"></a>
                                <a href="#slide3-4"></a>
                            </div>
                        </div>
        
        
                        </section>


                        <section class="container">
        
        
                        <div class="slider-wrapper">
        
                            <div class="slider" id="slider">
                                <img id="slide4-1" src="imagenes/lugares/'.$row['fotoLugar41'].'" alt="">
                                <img id="slide4-2" src="imagenes/lugares/'.$row['fotoLugar42'].'" alt="">
                                <img id="slide4-3" src="imagenes/lugares/'.$row['fotoLugar43'].'" alt="">
                                <img id="slide4-4" src="imagenes/lugares/'.$row['fotoLugar44'].'" alt="">
                            </div>
                            <div class="slider-nav2">
                                <a href="#slide4-1"></a>
                                <a href="#slide4-2"></a>
                                <a href="#slide4-3"></a>
                                <a href="#slide4-4"></a>
                            </div>
                        </div>
        
                        <div class="texto-Excursiones2">
                            <h1 class="visitar">
                                ꕤ'.$row['Lugar4'].'ꕤ
                            </h1>
        
                        </div>
        
                        </section>


                        <section class="container">
        
                        <div class="texto-Excursiones">
                            <h1 class="visitar">
                                ꕤ'.$row['Lugar5'].'ꕤ
                            </h1>
        
                        </div>
        
                        <div class="slider-wrapper">
        
                            <div class="slider" id="slider">
                                <img id="slide5-1" src="imagenes/lugares/'.$row['fotoLugar51'].'" alt="">
                                <img id="slide5-2" src="imagenes/lugares/'.$row['fotoLugar52'].'" alt="">
                                <img id="slide5-3" src="imagenes/lugares/'.$row['fotoLugar53'].'" alt="">
                                
                            </div>
                            <div class="slider-nav">
                                <a href="#slide5-1"></a>
                                <a href="#slide5-2"></a>
                                <a href="#slide5-3"></a>
                            </div>
                        </div>
        
        
                        </section>




                    </section>

                    <footer class="footer margen-interno">
                    <nav class="pie">
                        <a href="#">Desarrollado por Wavy </a>
                    </nav>
                    </footer> 
                    ';
                    echo "</div>";
                            }
               
                ?>
        </div>

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
            <a href="carrito.php" class="submit-btn">Carrito</a>               
            <a href="php/controlador_cerrar_session.php" class="submit-btn b2">Cerrar sesion</a>
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
    
    </div>
    
</body>
</html>