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
    <title>Registrarse</title>
</head>

<body>


<div class="div-padre">

        <header class="header">

            <div class="menu margen-interno">
                <div class="logo2">
                    <a href="index.php"><img src="imagenes/004.png" alt=""></a>
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
                    <h1>REGISTRO DE USUARIOS</h1>

                </div>

            </div>

        </header>

        <div class="principal2">

        <div class="login">
            

            <form method="POST" action="php/registroUser.php" class="form-container">
                <label>
                    Ingrese su Email: <input type="email" name="correo" required placeholder="Ej: SenderoNomada@gmail.com" class="textarea">
                </label>
                <br>
                <label>
                    Ingrese su Contraseña: <input type="password" name="contrasena" required placeholder="**********" class="textarea">
                </label>
                <br>
                <label>
                    Ingrese sus Nombres: <input type="text" name="nombres" required placeholder="German" class="textarea">
                </label>
                <br>
                <label>
                    Ingrese sus Apellidos: <input type="text" name="apellidos" required placeholder="Garmendia" class="textarea">
                </label>
                <br>
                <label>
                    Ingrese su Nacionalidad: <input type="text" name="na" required placeholder="Americano" class="textarea">
                </label>
                <br>
                <label>
                    Ingrese su edad: <input type="number" name="edad" required placeholder="35" class="textarea">
                </label>
                <br>
                <label>
                    Ingrese su celular: <input type="number" name="celular" required placeholder="30040321" class="textarea">
                </label>
                <br>
                <center><button type="submit" class="submit-btn"> registrarse </button></center>
            </form>

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