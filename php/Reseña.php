<?php
include 'database.php';

$Nombre = $_POST['Nombre'];
$Reseña = $_POST['Reseña'];

    $stm = mysqli_prepare($conexion, "INSERT INTO `reseñas guardadas` (nombre, Reseña) VALUES (?, ?)");

    mysqli_stmt_bind_param($stm, 'ss', $Nombre, $Reseña);
    $ejecutar = mysqli_stmt_execute($stm);
    if($ejecutar){
        echo '
            <script>
                alert("Reseña almacenada correctamente!");
                window.location = "../index.html";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Ha ocurrido un error al intentar almacenar la reseña.");
                window.location = "../index.html";
            </script>
        ';
    }

mysqli_close($conexion);
?>