<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
    <title>Modificar Excursiones</title>
</head>

<body>
    <div class="div-padre">
        <header class="header">
            <div class="menu margen-interno">
                <div class="nav">
                    <a href="agregarE.html">Agregar Excursiones</a>
                    <a href="modificarE.php" class="here">Modificar Excursiones</a>
                    <a href="eliminarE.php">Eliminar Excursiones</a>
                    <a href="admin.html">Regresar</a>
                    <a href="php/controlador_cerrar_session.php">Salir</a>
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
                    <h1>MODIFICAR EXCURSIONES</h1>
                </div>
            </div>
        </header>
        
        <div class="principal4">
            <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            include 'php/database.php';

            $excursion = null;
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
                $id = (int)$_POST['id'];
                // Perform the SELECT query to fetch excursion details
                $consulta = "SELECT id, Nombre, lider, fecha, precio, imagen, cupos, textoBienvenida, divBackground, textoPrincipal, Lugar1, Lugar2, Lugar3, Lugar4, Lugar5 FROM destinos WHERE id = '$id'";
                $select_result = mysqli_query($conexion, $consulta);
                if ($select_result && mysqli_num_rows($select_result) > 0) {
                    $excursion = mysqli_fetch_assoc($select_result);
                } else {
                    echo '<script>alert("¡La excursión no existe!");</script>';
                }
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Nombre'])) {
                
                include 'php/database.php';

                $id = (int)$_POST['id'];
                $name = $_POST['Nombre'];
                $lider = $_POST['lider'];
                $fecha = $_POST['fecha'];
                $precio = $_POST['precio'];
                $cupos = $_POST['cupos'];
                $textoBienvenida = $_POST['textoBienvenida'];
                $textoPrincipal = $_POST['textoPrincipal'];
                $Lugar1 = $_POST['Lugar1'];
                $Lugar2 = $_POST['Lugar2'];
                $Lugar3 = $_POST['Lugar3'];
                $Lugar4 = $_POST['Lugar4'];
                $Lugar5 = $_POST['Lugar5'];

                $query = "UPDATE destinos SET 
                Nombre = '". mysqli_real_escape_string($conexion, $name) ."',
                lider = '". mysqli_real_escape_string($conexion, $lider) ."', 
                fecha = '". mysqli_real_escape_string($conexion, $fecha) ."',
                precio = '". mysqli_real_escape_string($conexion, $precio) ."',
                cupos = '". mysqli_real_escape_string($conexion, $cupos) ."',
                textoBienvenida = '". mysqli_real_escape_string($conexion, $textoBienvenida) ."',
                textoPrincipal = '". mysqli_real_escape_string($conexion, $textoPrincipal) ."',
                Lugar1 = '". mysqli_real_escape_string($conexion, $Lugar1) ."',
                Lugar2 = '". mysqli_real_escape_string($conexion, $Lugar2) ."',
                Lugar3 = '". mysqli_real_escape_string($conexion, $Lugar3) ."',
                Lugar4 = '". mysqli_real_escape_string($conexion, $Lugar4) ."',
                Lugar5 = '". mysqli_real_escape_string($conexion, $Lugar5) ."'
                WHERE id = '$id'";


                if (mysqli_query($conexion, $query)) {
                    echo '<script>alert("¡Excursión actualizada con éxito!");
                    window.location = "../admin.html";
                    </script>';
                } else {
                    echo '<script>alert("Error al actualizar la excursión: '. mysqli_error($conexion) .'");
                    window.location = "../admin.html";
                    </script>';
                }
                
            }
            ?>
            
            <div class="contForm">
                <form method="POST" action="" class="form-container" enctype="multipart/form-data">
                    <label>
                        Ingrese el id de la excursion: <input type="text" name="id" required placeholder="13" class="textarea" maxlength="50">
                    </label>
                    <center><button type="submit" class="submit-btn">Buscar</button></center>
                </form>

                <?php if ($excursion): ?>
                <form method="POST" action="" class="form-container" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($excursion['id']); ?>">
                    <label>
                        Ingrese el nombre: <input type="text" name="Nombre" required value="<?php echo htmlspecialchars($excursion['Nombre']); ?>" class="textarea" maxlength="50">
                    </label>
                    <br>
                    <label>
                        Ingrese el lider:
                        <select name="lider" required class="custom-select">
                            <option value="Claire Redfield" <?php echo $excursion['lider'] == 'Claire Redfield' ? 'selected' : ''; ?>>Claire Redfield</option>
                            <option value="Ruka Yoshida" <?php echo $excursion['lider'] == 'Ruka Yoshida' ? 'selected' : ''; ?>>Ruka Yoshida</option>
                            <option value="Xiaomao Lee" <?php echo $excursion['lider'] == 'Xiaomao Lee' ? 'selected' : ''; ?>>Xiaomao Lee</option>
                            <option value="Juan Ponce de León" <?php echo $excursion['lider'] == 'Juan Ponce de León' ? 'selected' : ''; ?>>Juan Ponce de León</option>
                            <option value="Michael Smith" <?php echo $excursion['lider'] == 'Michael Smith' ? 'selected' : ''; ?>>Michael Smith</option>
                            <option value="Yoo Gong" <?php echo $excursion['lider'] == 'Yoo Gong' ? 'selected' : ''; ?>>Yoo Gong</option>
                        </select>
                    </label>
                    <br>
                    <label>
                        Ingrese la fecha: <input type="date" name="fecha" required value="<?php echo htmlspecialchars($excursion['fecha']); ?>" class="custom-date-input">
                    </label>
                    <br>
                    <label>
                        Ingrese el precio: <input type="number" name="precio" required value="<?php echo htmlspecialchars($excursion['precio']); ?>" class="textarea" min="1000" max="10000" title="El precio debe ser entre 1000 y 10000 USD">
                    </label>
                    <br>
                    <label>
                        Ingrese la cantidad de cupos: <input type="number" name="cupos" required value="<?php echo htmlspecialchars($excursion['cupos']); ?>" class="textarea" min="5" max="15" title="Ingrese una cantidad válida (máximo 15).">
                    </label>
                    <br>
                    <label>
                        Ingrese el texto de bienvenida: <input type="text" name="textoBienvenida" required value="<?php echo htmlspecialchars($excursion['textoBienvenida']); ?>" class="textarea" maxlength="30" title="Solo se permiten 30 caracteres máximo">
                    </label>
                    <br>
                    <label>
                        Ingrese el texto principal: <input type="text" name="textoPrincipal" required value="<?php echo htmlspecialchars($excursion['textoPrincipal']); ?>" maxlength="1000" class="textarea2">
                    </label>
                    <br>
                    <label>
                        Ingrese el lugar 1: <input type="text" name="Lugar1" required value="<?php echo htmlspecialchars($excursion['Lugar1']); ?>" maxlength="30" class="textarea" title="Solo se permiten 30 caracteres máximo">
                    </label>
                    <br>
                    <label>
                        Ingrese el lugar 2: <input type="text" name="Lugar2" required value="<?php echo htmlspecialchars($excursion['Lugar2']); ?>" maxlength="30" class="textarea" title="Solo se permiten 30 caracteres máximo">
                    </label>
                    <br>
                    <label>
                        Ingrese el lugar 3: <input type="text" name="Lugar3" required value="<?php echo htmlspecialchars($excursion['Lugar3']); ?>" maxlength="30" class="textarea" title="Solo se permiten 30 caracteres máximo">
                    </label>
                    <br>
                    <label>
                        Ingrese el lugar 4: <input type="text" name="Lugar4" required value="<?php echo htmlspecialchars($excursion['Lugar4']); ?>" maxlength="30" class="textarea" title="Solo se permiten 30 caracteres máximo">
                    </label>
                    <br>
                    <label>
                        Ingrese el lugar 5: <input type="text" name="Lugar5" required value="<?php echo htmlspecialchars($excursion['Lugar5']); ?>" maxlength="30" class="textarea" title="Solo se permiten 30 caracteres máximo">
                    </label>
                    <br>
                    <center><button type="submit" class="submit-btn">Modificar</button></center>
                </form>
                <?php endif; ?>
            </div>
        </div>

        <footer class="footer margen-interno">
            <nav class="pie">
                <a href="#">Desarrollado por Wavy</a>
            </nav>
        </footer>
    </div>
</body>

</html>
