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
    <title>Eliminar</title>
</head>

<body>


    <div class="div-padre">

        <header class="header">

            <div class="menu margen-interno">

                <div class="nav">

                    <a href="agregarE.html" >Agregar Excursiones</a>
                    <a href="modificarE.php">Modificar Excursiones</a>
                    <a href="eliminarE.php" class="here">Eliminar Excursiones</a>
                    <a href="admin.html">regresar</a>
                    <a href="php/controlador_cerrar_session.php">Salir</a>
                </div>

                <div class="social">
                    <div><a href="https://x.com/senderoDeNomada"><i class="fa-brands fa-twitter fa-2xl"></i></a></div>
                    <div><a href="https://www.instagram.com/senderodenomada/"><i
                                class="fa-brands fa-instagram fa-2xl"></i></a></div>
                </div>

            </div>

            <div class="new-Body">
                <div class="typewriter">
                    <br>
                    <br>
                    <h1>ELIMINAR EXCURSIONES</h1>

                </div>

            </div>

        </header>
        
        <div class="principal4">
            
        <?php
                include 'php/database.php';

                // Ensure the database connection is established
                if (!$conexion) {
                    die("Database connection failed: " . mysqli_connect_error());
                }

                $query = "SELECT Nombre, lider, fecha, precio, id FROM destinos";

                // Execute the select query
                $result = mysqli_query($conexion, $query);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conexion));
                }

                echo '<link rel="stylesheet" href="consultar.css">';

                echo '<center><table border="3">
                <tr class="ff">
                <th>ID</th>
                <th>Excursion</th>
                <th>Lider</th>
                <th>Fecha</th>
                <th>Precio</th>
                </tr>';

                while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['Nombre'] . "</td>";
                    echo "<td>" . $row['lider'] . "</td>";
                    echo "<td>" . $row['fecha'] . "</td>";
                    echo "<td>" . $row['precio'] . "</td>";
                    echo "</tr>";
                }

                echo '</table></center>';

                // Close the db connection
                mysqli_close($conexion);
        ?>

        <br>


            <div class="contForm">
                <form method="POST" action="/php/eliminarE.php" class="form-container" enctype="multipart/form-data">
                    <label>
                        Ingrese el id de la excursion: <input type="text" name="id" required placeholder="13"
                            class="textarea" maxlength="50">
                    </label>

                    <center><button type="submit" class="submit-btn"> Eliminar </button></center>
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