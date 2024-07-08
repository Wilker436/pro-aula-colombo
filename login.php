<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Inicio de sesion</title>
</head>

<body>


<div class="div-padre">

        <header class="header">

            <div class="menu margen-interno">
                <div class="logo2">
                    <a href="index.php"><img src="imagenes/004.png" alt=""></a>
                </div>


                <div class="social">
                    <div><a href="https://x.com/senderoDeNomada"><i class="fa-brands fa-twitter fa-2xl"></i></a></div>
                    <div><a href="https://www.instagram.com/senderodenomada/"><i class="fa-brands fa-instagram fa-2xl"></i></a></div>
                </div>

            </div>

            <div class="new-Body">
                <div class="typewriter">
                    <br>
                    <br>
                    <h1>MENU DE INICIO DE SESION</h1>

                </div>

            </div>

        </header>

        <div class="principal3">

        <div class="login">
            

            <form method="POST" action="" class="form-container">

                <?php 
                    include 'php/database.php';
                    include 'php/controlador.php';          
                ?>
            <br>

            <label> 
                <h2>Email:</h2><input type="email" name="correo"  placeholder="Ej: SenderoNomada@gmail.com" class="textarea1">
            </label>   
                
            <br>
            <label> 
            <h2>Contraseña:</h2><input type="password" name="contrasena"  placeholder="**********" class="textarea1">
            </label> 
            <br>
            <center><input name="btningresar" class="submit-btn" type="submit" value="Ingresar"></center>

            </form>
            <br>
            <br>
            <br>
            <br>
            <center><button  name="registrarse" class="submit-btn" onclick="location.href='registrarse.php'">Registrarse</button></center>

        </div>
                

        </div>



        <footer class="footer margen-interno">
            <nav class="pie">
                <a href="#">Desarrollado por Wavy </a>
            </nav>
        </footer>
</div>
  
</body>
</html>