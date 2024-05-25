<?php
session_start();

if (empty($_SESSION["id"])) {
    header("location: login.php");
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


        function cambiarContenido() {
            const parametro = obtenerParametro('parametro');
            const banner = document.getElementById('banner');


            if (parametro === 'Islandia') {
                divpadre.innerHTML = `
                <div class="islandia">
                
                <div class="new-Body">
                <div class="typewriter">
                    <br>
                    <br>
                    <h1>¡Bienvenidos a Islandia! </h1>

                </div>

                </div>
        
                <section class="principal">
        
                    <div class="text-principal">
                        <h2>
                            Islandia, la famosa "isla de fuego y hielo", es un destino turístico de renombre mundial para los
                            amantes de la naturaleza y la aventura. Con su impresionante variedad de paisajes, que van desde
                            géiseres activos y cascadas hasta glaciares y playas de arena negra, Islandia ofrece algo para todos
                            los gustos. Su fascinante historia y cultura, junto con su belleza natural sin igual, hacen de
                            Islandia un lugar verdaderamente único y digno de ser explorado.
                        </h2>
                    </div>
        
                    <div class="Excursion" id="Excursion">
        
                        <img src="imagenes/Destinos/i02.jpg" alt="" id="imga" class="imagen">
        
                        <div class="datos" id="datos">
        
                            <h1 class="titulo">ꕤISLANDIAꕤ</h1>
                            <p class="parrafo">
                                -Lider de expedicion: Ruka Yoshida <br>
                                -Fecha: 2024-06-03 <br>
                                -Duracion: 1 semana <br>
                                -Precio: $2100
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
                                ꕤPARQUE NACIONAL THINGVELLIRꕤ
                            </h1>
        
                        </div>
        
                        <div class="slider-wrapper">
        
                            <div class="slider" id="slider">
                                <img id="slide-1" src="imagenes/islandia/it1.jpg" alt="">
                                <img id="slide-2" src="imagenes/islandia/it2.jpg" alt="">
                                <img id="slide-3" src="imagenes/islandia/it3.jpg" alt="">
                                <img id="slide-4" src="imagenes/islandia/it4.jpg" alt="">
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
                                <img id="slide2-1" src="imagenes/islandia/ig1.jpg" alt="">
                                <img id="slide2-2" src="imagenes/islandia/ig2.jpg" alt="">
                                <img id="slide2-3" src="imagenes/islandia/ig3.jpg" alt="">
                                <img id="slide2-4" src="imagenes/islandia/ig4.jpg" alt="">
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
                                ꕤCATARATAS DE GULLFOSSꕤ
                            </h1>
        
                        </div>
        
                    </section>
        
        
                    <section class="container">
        
                        <div class="texto-Excursiones">
                            <h1 class="visitar">
                                ꕤGEYSIRꕤ
                            </h1>
        
                        </div>
        
                        <div class="slider-wrapper">
        
                            <div class="slider" id="slider">
                                <img id="slide3-1" src="imagenes/islandia/ie1.jpg" alt="">
                                <img id="slide3-2" src="imagenes/islandia/ie2.jpg" alt="">
                                <img id="slide3-3" src="imagenes/islandia/ie3.jpg" alt="">
                                <img id="slide3-4" src="imagenes/islandia/ie4.jpg" alt="">
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
                                <img id="slide4-1" src="imagenes/islandia/ib1.jpg" alt="">
                                <img id="slide4-2" src="imagenes/islandia/ib2.jpg" alt="">
                                <img id="slide4-3" src="imagenes/islandia/ib3.jpg" alt="">
                                <img id="slide4-4" src="imagenes/islandia/ib4.jpg" alt="">
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
                                ꕤBLUE LAGOONꕤ
                            </h1>
        
                        </div>
        
                    </section>
        
        
                    <section class="container">
        
                        <div class="texto-Excursiones">
                            <h1 class="visitar">
                                ꕤPARQUE NACIONAL VATNAJÖKULLꕤ
                            </h1>
        
                        </div>
        
                        <div class="slider-wrapper">
        
                            <div class="slider" id="slider">
                                <img id="slide5-1" src="imagenes/islandia/iv1.jpg" alt="">
                                <img id="slide5-2" src="imagenes/islandia/iv2.jpg" alt="">
                                <img id="slide5-3" src="imagenes/islandia/iv3.jpg" alt="">
                                <img id="slide5-4" src="imagenes/islandia/iv4.jpg" alt="">
                            </div>
                            <div class="slider-nav">
                                <a href="#slide5-1"></a>
                                <a href="#slide5-2"></a>
                                <a href="#slide5-3"></a>
                                <a href="#slide5-4"></a>
                            </div>
                        </div>
        
        
                    </section>
        
                    <section class="container">
        
        
                        <div class="slider-wrapper">
        
                            <div class="slider" id="slider">
                                <img id="slide6-1" src="imagenes/islandia/ir1.jpg" alt="">
                                <img id="slide6-2" src="imagenes/islandia/ir2.jpg" alt="">
                                <img id="slide6-3" src="imagenes/islandia/ir3.jpg" alt="">
                                <img id="slide6-4" src="imagenes/islandia/ir4.jpg" alt="">
                            </div>
                            <div class="slider-nav2">
                                <a href="#slide6-1"></a>
                                <a href="#slide6-2"></a>
                                <a href="#slide6-3"></a>
                                <a href="#slide6-4"></a>
                            </div>
                        </div>
        
                        <div class="texto-Excursiones2">
                            <h1 class="visitar">
                                ꕤPLAYA DE ARENA NEGRA DE REYNISFJARAꕤ
                            </h1>
        
                        </div>
        
                    </section>
        
        
        
                </section>

                
        
                <footer class="footer margen-interno">
                    <nav class="pie">
                        <a href="#">Desarrollado por Wavy </a>
                    </nav>
                </footer> 

            </div>
                `;

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
            } else if (parametro === 'Australia') {
                divpadre.innerHTML = `
                <div class="Australia">

        
                        <div class="new-Body">
                            <div class="typewriterA">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Australia! </h1>
        
                            </div>
        
                        </div>
        
                   
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>
                                Australia, la famosa "tierra de contrastes", es un destino turístico de renombre mundial para
                                los amantes de la naturaleza y la aventura. Con su impresionante variedad de paisajes, que van
                                desde las arenas rojas del desierto y los arrecifes de coral turquesa hasta las selvas
                                tropicales y las montañas nevadas, Australia ofrece algo para todos los gustos. Su fascinante
                                historia y cultura, junto con su belleza natural sin igual, hacen de Australia un lugar
                                verdaderamente único y digno de ser explorado.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/ULURU.png" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤAUSTRALIAꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: Claire Redfield<br>
                                    -Fecha: 2024-06-17 <br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $3000
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
                                            <li>Guia de como identificar animales peligrosos en Australia </li>
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
                                    ꕤIsla Canguroꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/australia/ak1.jpg" alt="">
                                    <img id="slide-2" src="imagenes/australia/ak2.jpg" alt="">
                                    <img id="slide-3" src="imagenes/australia/ak3.jpg" alt="">
                                    <img id="slide-4" src="imagenes/australia/ak4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/australia/az3.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/australia/az2.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/australia/az1.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/australia/az4.jpg" alt="">
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
                                    ꕤAustralia zooꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤLos Doce Apóstolesꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/australia/ap3.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/australia/ap2.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/australia/ap1.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/australia/ap4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/australia/ab2.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/australia/ab1.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/australia/ab3.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/australia/ab4.jpg" alt="">
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
                                    ꕤLa Gran Barrera de Coralꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤCascadas Wallamanꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/australia/aw1.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/australia/aw2.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/australia/aw3.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/australia/aw4.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/australia/au3.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/australia/au2.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/australia/au1.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/australia/au4.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤAyers Rockꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>
                    `;

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
            } else if (parametro === 'Tailandia') {
                divpadre.innerHTML = `

                <div class="Tai">
       
                        <div class="new-Body">
                            <div class="typewriter">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Tailandia! </h1>
        
                            </div>
        
                        </div>
        

        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>
                                Tailandia, la famosa "tierra de sonrisas", es un destino turístico de renombre mundial para los
                                amantes de la cultura y la aventura. Con su impresionante variedad de paisajes, que van desde
                                las playas de ensueño del sur y los templos budistas dorados hasta las montañas del norte y los
                                ríos serpenteantes, Tailandia ofrece algo para todos los gustos. Su rica historia y cultura,
                                junto con su deliciosa gastronomía y su gente amigable, hacen de Tailandia un lugar
                                verdaderamente único y digno de ser explorado.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/Tai.png" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤTailandiaꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: Michael Smith <br>
                                    -Fecha: 2024-07-14 <br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $2600
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
                                    ꕤSukhothaiꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/Thai/ts4.jpg" alt="">
                                    <img id="slide-2" src="imagenes/Thai/ts1.jpg" alt="">
                                    <img id="slide-3" src="imagenes/Thai/ts2.jpg" alt="">
                                    <img id="slide-4" src="imagenes/Thai/ts3.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/Thai/tk4.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/Thai/tk2.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/Thai/tk3.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/Thai/tk1.jpg" alt="">
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
                                    ꕤKoh Taoꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤAyutthayaꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/Thai/ta1.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/Thai/ta2.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/Thai/ta3.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/Thai/ta4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/Thai/tc2.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/Thai//tc1.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/Thai//tc3.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/Thai//tc4.jpg" alt="">
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
                                    ꕤChiang Rai ꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤChiang Maiꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/Thai/th3.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/Thai/th2.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/Thai/th1.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/Thai/th4.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/Thai/tr1.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/Thai/tr2.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/Thai/tr3.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/Thai/tr4.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤKrabiꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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


            }
            else if (parametro === 'Israel') {
                divpadre.innerHTML = `

                <div class="Isra">
        
                        <div class="new-Body">
                            <div class="typewriter">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Israel! </h1>
        
                            </div>
        
                        </div>
        
                  
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>
                                Israel, el fascinante "terruño de lucha y fe", es un destino turístico de fama mundial para los
                                amantes de la historia y la aventura. Desde los sitios arqueológicos de la antigüedad en el
                                norte y las modernas ciudades costeras en el centro, hasta los desiertos y oasis del sur, Israel
                                ofrece una diversidad de paisajes y experiencias sin igual. Su rica historia y cultura, junto
                                con su variada gastronomía y su gente acogedora, hacen de Israel un lugar verdaderamente único y
                                digno de ser explorado.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/Israel.png" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤIsraelꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: Yoo Gong <br>
                                    -Fecha: 2024-07-27 <br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $3500
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
                                    ꕤJerusalénꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/Israel/ij1.jpg" alt="">
                                    <img id="slide-2" src="imagenes/Israel/ij2.jpg" alt="">
                                    <img id="slide-3" src="imagenes/Israel/ij3.jpg" alt="">
                                    <img id="slide-4" src="imagenes/Israel/ij4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/Israel/ig1.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/Israel/ig2.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/Israel/ig3.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/Israel/ig4.jpg" alt="">
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
                                    ꕤGalileaꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤHaifaꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/Israel/ih1.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/Israel/ih2.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/Israel/ih3.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/Israel/ih4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/Israel/ia1.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/Israel/ia2.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/Israel/ia3.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/Israel/ia4.jpg" alt="">
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
                                    ꕤAcreꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤCesáreaꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/Israel/ic1.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/Israel/ic2.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/Israel/ic3.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/Israel/ic4.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/Israel/im1.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/Israel/im2.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/Israel/im3.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/Israel/im4.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤMar Muertoꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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
            }
            else if (parametro === 'Egipto') {
                divpadre.innerHTML = `

                <div class="Egipto">
        
                        <div class="new-Body">
                            <div class="typewriter">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Egipto! </h1>
        
                            </div>
        
                        </div>
        
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>
                                Egipto, la cuna de la civilización faraónica, es un destino turístico de fama mundial para los
                                amantes de la historia y la aventura. Desde las majestuosas pirámides y esfinges hasta los
                                impresionantes templos y tumbas faraónicas, Egipto ofrece un viaje en el tiempo a través de la
                                rica historia y cultura del país. Sus paisajes variados, que van desde el río Nilo y el desierto
                                hasta las tranquilas costas del Mar Rojo.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/egipto.jpg" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤEgiptoꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: Xioamo Lee <br>
                                    -Fecha: 2024-08-09 <br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $2500
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
                                    ꕤPiramide de Gizaꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/egipto/eg1.jpg" alt="">
                                    <img id="slide-2" src="imagenes/egipto/eg2.jpg" alt="">
                                    <img id="slide-3" src="imagenes/egipto/eg3.jpg" alt="">
                                    <img id="slide-4" src="imagenes/egipto/eg4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/egipto/ev1.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/egipto/ev2.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/egipto/ev3.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/egipto/ev4.jpg" alt="">
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
                                    ꕤValle de los Reyesꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤTemplo de Ramsésꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/egipto/er1.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/egipto/er2.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/egipto/er3.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/egipto/er4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/egipto/el1.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/egipto/el2.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/egipto/el3.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/egipto/el4.jpg" alt="">
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
                                    ꕤTempo de Luxórꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤKarnakꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/egipto/ek1.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/egipto/ek2.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/egipto/ek3.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/egipto/ek4.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/egipto/es1.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/egipto/es2.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/egipto/es3.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/egipto/es4.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤCiudadela de Saladinoꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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
            }
             else if (parametro === 'Kenia') {
                divpadre.innerHTML = `

                <div class="Kenia">

                        <div class="new-Body">
                            <div class="typewriter">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Kenia! </h1>
        
                            </div>
        
                        </div>
        
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>
                                Kenia, también conocida como la "cuna de la humanidad", es un destino turístico fascinante para
                                los amantes de la historia, la naturaleza y la aventura. Con su rica diversidad de paisajes, que
                                van desde las llanuras de savana y las montañas escarpadas hasta las playas de ensueño y los
                                lagos de agua dulce, Kenia ofrece una gran cantidad de opciones para actividades al aire libre y
                                exploración.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/egipto.jpg" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤKeniaꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: Juan Ponce de León <br>
                                    -Fecha: 2024-08-20 <br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $2800
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
                                    ꕤParque Nacional Aberdaresꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/kenia/kb3.jpg" alt="">
                                    <img id="slide-2" src="imagenes/kenia/kb1.jpg" alt="">
                                    <img id="slide-3" src="imagenes/kenia/kb2.jpg" alt="">
                                    <img id="slide-4" src="imagenes/kenia/kb4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/kenia/ks1.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/kenia/ks2.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/kenia/ks3.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/kenia/ks4.jpg" alt="">
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
                                    ꕤMasai Maraꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤParque nacional de Amboseliꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/kenia/ka1.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/kenia/ka4.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/kenia/ka2.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/kenia/ka23.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/kenia/km3.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/kenia/km2.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/kenia/km1.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/kenia/km4.jpg" alt="">
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
                                    ꕤMombasaꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤLago Nakuruꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/kenia/kn1.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/kenia/kn2.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/kenia/kn3.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/kenia/kn4.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/kenia/kl1.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/kenia/kl2.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/kenia/kl4.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/kenia/kl3.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤLamuꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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

            }

            else if (parametro === 'Grecia') {
                divpadre.innerHTML = `

                <div class="Grecia">

        
                        <div class="new-Body">
                            <div class="typewriterA">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Grecia! </h1>
        
                            </div>
        
                        </div>
        
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>
                                Grecia, la cuna de la civilización occidental, es un destino turístico de fama mundial para los amantes de
                                la historia, la cultura y la belleza natural. Con sus impresionantes paisajes, que van desde las islas
                                paradisíacas del Mar Egeo y las playas de arena blanca hasta los majestuosos monasterios de Meteora y las
                                ruinas antiguas de Atenas y Olimpia, Grecia ofrece una gran variedad de experiencias para todos los gustos.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/grecia.jpg" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤGreaciaꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: Ruka Yoshida <br>
                                    -Fecha: 2024-10-17 <br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $2800
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
                                    ꕤTemplo de Zeus Olímpicoꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/grecia/gz1.jpg" alt="">
                                    <img id="slide-2" src="imagenes/grecia/gz2.jpg" alt="">
                                    <img id="slide-3" src="imagenes/grecia/gz3.jpg" alt="">
                                    <img id="slide-4" src="imagenes/grecia/gz4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/grecia/go1.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/grecia/go2.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/grecia/go3.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/grecia/go4.jpg" alt="">
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
                                    ꕤOlimpiaꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤPlaya Elafonisiꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/grecia/ge2.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/grecia/ge1.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/grecia/ge3.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/grecia/ge4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/grecia/gc4.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/grecia/gc1.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/grecia/gc2.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/grecia/gc3.jpg" alt="">
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
                                    ꕤAcrópolis de Atenasꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤÁgora de Atenasꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/grecia/ga1.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/grecia/ga2.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/grecia/ga3.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/grecia/ga4.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/grecia/gm2.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/grecia/gm3.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/grecia/gm4.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/grecia/gm1.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤMeteoraꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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
            }
            else if (parametro === 'Alaska') {
                divpadre.innerHTML = `

                <div class="Alaska">

        
                        <div class="new-Body">
                            <div class="typewriterA">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Alaska! </h1>
        
                            </div>
        
                        </div>
        
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>
                                Alaska, la joya del norte, atrae a viajeros de todo el mundo en busca de aventura, naturaleza virgen y paisajes impresionantes. Desde las majestuosas montañas de la cordillera de Alaska hasta los glaciares centelleantes del Parque Nacional de los Fiordos de Kenai, y desde los misteriosos bosques boreales hasta las aguas cristalinas de la península de Kenai, Alaska ofrece una experiencia única para todos los que buscan conectar con la belleza natural y la grandeza salvaje del último rincón intacto de América del Norte.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/alaska.jpg" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤAlaskaꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: Yoo Gong <br>
                                    -Fecha: 2024-11-20 <br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $2100
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
                                            <li>Vuelos</li>
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
                                    ꕤHubbard Glacierꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/alaska/ah3.jpg" alt="">
                                    <img id="slide-2" src="imagenes/alaska/ah1.jpg" alt="">
                                    <img id="slide-3" src="imagenes/alaska/ah2.jpg" alt="">
                                    <img id="slide-4" src="imagenes/alaska/ah4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/alaska/ab4.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/alaska/ab3.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/alaska/ab2.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/alaska/ab1.jpg" alt="">
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
                                    ꕤOBlack Spruce Dog Sleddingꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤObservación de ballenas en la vida silvestre de Juneau y Glaciar Mendenhallꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/alaska/ao1.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/alaska/ao2.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/alaska/ao3.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/alaska/ao4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/alaska/at2.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/alaska/at3.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/alaska/at1.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/alaska/at4.jpg" alt="">
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
                                    ꕤTony Knowles Coastal Trailꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤ Sitka National Historic Park/Totem Parkꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/alaska/as2.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/alaska/as4.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/alaska/as1.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/alaska/as3.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/alaska/am1.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/alaska/am2.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/alaska/am3.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/alaska/am4.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤMiller's Landingꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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
            }else if (parametro === 'Noruega') {
                divpadre.innerHTML = `

                <div class="Noruega">

        
                        <div class="new-Body">
                            <div class="typewriter">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Noruega! </h1>
        
                            </div>
        
                        </div>
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>
                                Noruega, el reino de los fiordos y las auroras boreales, cautiva a los viajeros con su impresionante belleza natural y su rica herencia cultural. Desde los majestuosos fiordos de Geiranger y Nærøy hasta los imponentes picos de los Alpes de Lyngen, y desde los encantadores pueblos pesqueros de Lofoten hasta las modernas ciudades de Oslo y Bergen, Noruega ofrece una mezcla fascinante de paisajes escénicos y experiencias culturales. Con su combinación única de historia vikinga, tradiciones folclóricas y una naturaleza salvaje e indómita, Noruega es un destino imperdible para aquellos que buscan aventura.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/noruega.jpg" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤNoruegaꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: Michael Smith  <br>
                                    -Fecha: 22024-10-06 <br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $2800
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
                                            <li>Vuelos</li>
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
                                    ꕤTromsø y el reino de las auroras borealesꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/noruega/nt2.jpg" alt="">
                                    <img id="slide-2" src="imagenes/noruega/nt1.jpg" alt="">
                                    <img id="slide-3" src="imagenes/noruega/nt3.jpg" alt="">
                                    <img id="slide-4" src="imagenes/noruega/nt4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/noruega/nl3.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/noruega/nl1.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/noruega/nl2.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/noruega/nl4.jpg" alt="">
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
                                    ꕤLofoten y Nordlandꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤKattegatꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/noruega/nk1.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/noruega/nk2.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/noruega/nk3.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/noruega/nk4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/noruega/nv2.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/noruega/nv3.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/noruega/nv4.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/noruega/nv1.jpg" alt="">
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
                                    ꕤMuseo Vikingo de Lofotenꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤ arkeologiske ruinerꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/noruega/nr3.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/noruega/nr4.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/noruega/nr1.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/noruega/nr2.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/noruega/ns2.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/noruega/ns3.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/noruega/ns4.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/noruega/ns1.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤLas islas Svalbardꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>

                    
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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

            }else if (parametro === 'Groenlandia') {
                divpadre.innerHTML = `

                <div class="groe">

        
                        <div class="new-Body">
                            <div class="typewriter">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Groenlandia! </h1>
        
                            </div>
        
                        </div>
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>
                            Groenlandia es el hogar de la segunda capa de hielo más grande del mundo, lo que la convierte en un destino ideal para los amantes de los glaciares y los icebergs. La costa está llena de fiordos y bahías, donde los icebergs se desprenden de los glaciares y flotan en el mar, creando un paisaje de ensueño.Además de sus paisajes glaciales, Groenlandia también ofrece una gran variedad de actividades al aire libre. La isla es el hogar de una gran variedad de vida silvestre, como osos polares, ballenas, focas y aves marinas, lo que la convierte en un destino ideal para los amantes de la naturaleza.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/groenlandia.jpg" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤGroenlandiaꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion: Claire Redfield  <br>
                                    -Fecha: 2024-11-08<br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $2200
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
                                            <li>Vuelos</li>
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
                                    ꕤIlulissatꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/groenlandia/gi1.jpg" alt="">
                                    <img id="slide-2" src="imagenes/groenlandia/gi2.jpg" alt="">
                                    <img id="slide-3" src="imagenes/groenlandia/gi3.jpg" alt="">
                                    <img id="slide-4" src="imagenes/groenlandia/gi4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/groenlandia/gn1.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/groenlandia/gn2.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/groenlandia/gn3.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/groenlandia/gn4.jpg" alt="">
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
                                    ꕤNuukꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤQaqortoqꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/groenlandia/gq1.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/groenlandia/gq2.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/groenlandia/gq3.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/groenlandia/gq4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/groenlandia/gs4.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/groenlandia/gs2.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/groenlandia/gs3.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/groenlandia/gs1.jpg" alt="">
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
                                    ꕤScoresby Sundꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤKangerlussuaqꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/groenlandia/gk1.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/groenlandia/gk2.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/groenlandia/gk3.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/groenlandia/gk4.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/groenlandia/gd1.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/groenlandia/gd2.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/groenlandia/gd3.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/groenlandia/gd4.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤDisko Bayꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>

                    
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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
            }else if (parametro === 'Costa Rica') {
                divpadre.innerHTML = `

                <div class="costa">

        
                        <div class="new-Body">
                            <div class="typewriterA">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Costa Rica! </h1>
        
                            </div>
        
                        </div>
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>                   
                                Costa Rica, el paraíso eco-turístico de Centroamérica, seduce a los viajeros con su exuberante biodiversidad, sus playas de ensueño y su espíritu pura vida. Desde las selvas tropicales del Parque Nacional Corcovado hasta las impresionantes cumbres del Volcán Arenal, y desde las vibrantes aguas azules del Parque Nacional Manuel Antonio hasta los tranquilos canales de Tortuguero, Costa Rica ofrece una variedad de experiencias inolvidables para los amantes de la naturaleza y la aventura. Con su compromiso con la conservación ambiental, su cultura acogedora y su paisaje diverso, Costa Rica invita a los viajeros.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/costa.jpg" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤCosta Ricaꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion:Juan Ponce de Leon <br>
                                    -Fecha: 2025-01-10<br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $1500
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
                                            <li>Vuelos</li>
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
                                    ꕤParque Nacional Manuel Antonioꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/costa/cm1.jpg" alt="">
                                    <img id="slide-2" src="imagenes/costa/cm2.jpg" alt="">
                                    <img id="slide-3" src="imagenes/costa/cm3.jpg" alt="">
                                    <img id="slide-4" src="imagenes/costa/cm4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/costa/cb1.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/costa/cb2.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/costa/cb3.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/costa/cb4.jpg" alt="">
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
                                    ꕤReserva Biológica Bosque Nuboso Monteverdeꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤParque Nacional Volcán Poásꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/costa/cp1.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/costa/cp2.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/costa/cp3.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/costa/cp4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/costa/cc4.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/costa/cc2.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/costa/cc3.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/costa/cc1.jpg" alt="">
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
                                    ꕤCatarata La Fortunaꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤIsla Tortugaꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/costa/ct1.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/costa/ct2.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/costa/ct3.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/costa/ct4.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/costa/ce1.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/costa/ce2.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/costa/ce3.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/costa/ce4.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤEcotermales fortunaꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>

                    
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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
            }else if (parametro === 'Ucrania') {
                divpadre.innerHTML = `

                <div class="ucrania">

        
                        <div class="new-Body">
                            <div class="typewriterA">
                                <br>
                                <br>
                                <h1>¡Bienvenidos a Ucrania! </h1>
        
                            </div>
        
                        </div>
        
                    <section class="principal">
        
                        <div class="text-principal">
                            <h2>                   
                            Ucrania, la encrucijada entre Oriente y Occidente, cautiva a los visitantes con su rica historia, su vibrante cultura y sus paisajes pintorescos. Desde las cúpulas doradas de Kiev hasta los antiguos castillos de Lviv, y desde los campos de girasoles de la región de Poltava hasta las montañas escarpadas de los Cárpatos, Ucrania ofrece una mezcla fascinante de tradición y modernidad. Con su legado de folklore, sus festivales coloridos y su hospitalidad sincera, Ucrania invita a los viajeros a explorar sus ciudades históricas, sumergirse en sus tradiciones arraigadas y descubrir la belleza única de este país europeo en constante evolución.
                            </h2>
                        </div>
        
                        <div class="Excursion" id="Excursion">
        
                            <img src="imagenes/Destinos/ucrania.jpg" alt="" id="imga" class="imagen">
        
                            <div class="datos" id="datos">
        
                                <h1 class="titulo">ꕤUcraniaꕤ</h1>
                                <p class="parrafo">
                                    -Lider de expedicion:Xiaomao Lee <br>
                                    -Fecha: 2025-01-21<br>
                                    -Duracion: 1 semana <br>
                                    -Precio: $3500
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
                                            <li>Vuelos</li>
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
                                    ꕤPripyatꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide-1" src="imagenes/ucrania/up1.jpg" alt="">
                                    <img id="slide-2" src="imagenes/ucrania/up2.jpg" alt="">
                                    <img id="slide-3" src="imagenes/ucrania/up3.jpg" alt="">
                                    <img id="slide-4" src="imagenes/ucrania/up4.jpg" alt="">
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
                                    <img id="slide2-1" src="imagenes/ucrania/uo1.jpg" alt="">
                                    <img id="slide2-2" src="imagenes/ucrania/uo2.jpg" alt="">
                                    <img id="slide2-3" src="imagenes/ucrania/uo3.jpg" alt="">
                                    <img id="slide2-4" src="imagenes/ucrania/uo4.jpg" alt="">
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
                                    ꕤTeatro de Ópera y Ballet de Odessa ꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤArboretum Sofiyivka ꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide3-1" src="imagenes/ucrania/ua2.jpg" alt="">
                                    <img id="slide3-2" src="imagenes/ucrania/ua1.jpg" alt="">
                                    <img id="slide3-3" src="imagenes/ucrania/ua3.jpg" alt="">
                                    <img id="slide3-4" src="imagenes/ucrania/ua4.jpg" alt="">
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
                                    <img id="slide4-1" src="imagenes/ucrania/uk1.jpg" alt="">
                                    <img id="slide4-2" src="imagenes/ucrania/uk2.jpg" alt="">
                                    <img id="slide4-3" src="imagenes/ucrania/uk3.jpg" alt="">
                                    <img id="slide4-4" src="imagenes/ucrania/uk4.jpg" alt="">
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
                                    ꕤCastillo Kamianets-Podilskyiꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
                        <section class="container">
        
                            <div class="texto-Excursiones">
                                <h1 class="visitar">
                                    ꕤMonasterio de las Cuevas de Kievꕤ
                                </h1>
        
                            </div>
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide5-1" src="imagenes/ucrania/uc1.jpg" alt="">
                                    <img id="slide5-2" src="imagenes/ucrania/uc2.jpg" alt="">
                                    <img id="slide5-3" src="imagenes/ucrania/uc3.jpg" alt="">
                                    <img id="slide5-4" src="imagenes/ucrania/uc4.jpg" alt="">
                                </div>
                                <div class="slider-nav">
                                    <a href="#slide5-1"></a>
                                    <a href="#slide5-2"></a>
                                    <a href="#slide5-3"></a>
                                    <a href="#slide5-4"></a>
                                </div>
                            </div>
        
        
                        </section>
        
                        <section class="container">
        
        
                            <div class="slider-wrapper">
        
                                <div class="slider" id="slider">
                                    <img id="slide6-1" src="imagenes/ucrania/um1.jpg" alt="">
                                    <img id="slide6-2" src="imagenes/ucrania/um2.jpg" alt="">
                                    <img id="slide6-3" src="imagenes/ucrania/um3.jpg" alt="">
                                    <img id="slide6-4" src="imagenes/ucrania/um4.jpg" alt="">
                                </div>
                                <div class="slider-nav2">
                                    <a href="#slide6-1"></a>
                                    <a href="#slide6-2"></a>
                                    <a href="#slide6-3"></a>
                                    <a href="#slide6-4"></a>
                                </div>
                            </div>
        
                            <div class="texto-Excursiones2">
                                <h1 class="visitar">
                                    ꕤCastillo Palanokꕤ
                                </h1>
        
                            </div>
        
                        </section>
        
        
        
                    </section>

                    
        
                    <footer class="footer margen-interno">
                        <nav class="pie">
                            <a href="#">Desarrollado por Wavy </a>
                        </nav>
                    </footer>
        
                </div>

                `;
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
            }
            else {
                banner.style.backgroundImage = '';
            }
        }


        window.onload = cambiarContenido;
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