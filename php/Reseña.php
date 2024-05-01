<?php
include 'database.php';

$Nombre = $_POST['Nombre'];
$resena = $_POST['Reseña'];

    $stm = mysqli_prepare($conexion, "INSERT INTO `resenas` (nombre, opiniones) VALUES (?, ?)");

    mysqli_stmt_bind_param($stm, 'ss', $Nombre, $resena);
    $ejecutar = mysqli_stmt_execute($stm);
    if($ejecutar){
        echo '
            <script>
                alert("resena almacenada correctamente!");
                window.location = "../index.html";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Ha ocurrido un error al intentar almacenar la resena.");
                window.location = "../index.html";
            </script>
        ';
    }

mysqli_close($conexion);
?>