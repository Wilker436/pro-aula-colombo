<?php
session_start();

if (!isset($_SESSION["id"])) {
    // Redirigir al usuario si no está autenticado
    header("location: login.php");
    exit();
}

$id_usuario = $_SESSION["id"];

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el destino enviado desde la solicitud AJAX
    $destino = $_POST['destino'];

    // Consulta para obtener los detalles del destino
    $query = "SELECT lider, fecha, precio, imagen FROM destinos WHERE Nombre = ?";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, 's', $destino);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        $lider = $row['lider'];
        $fecha = $row['fecha'];
        $precio = $row['precio'];
        $imagen = $row['imagen'];

        // Insertar los datos en la tabla 'carrito'
        $insert_query = mysqli_prepare($conexion, "INSERT INTO carrito (excursion, idUsuario, precio, lider, fecha, imagen) VALUES (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($insert_query, 'ssssss', $destino, $id_usuario, $precio, $lider, $fecha, $imagen);
        $ejecutar = mysqli_stmt_execute($insert_query);

        if ($ejecutar) {
            echo "Reserva realizada con éxito";
            // Obtener el número de cupos disponibles para el destino seleccionado
                $query_cupos = mysqli_prepare($conexion, "SELECT cupos FROM destinos WHERE Nombre = ?");
                mysqli_stmt_bind_param($query_cupos, 's', $destino);
                mysqli_stmt_execute($query_cupos);
                $result_cupos = mysqli_stmt_get_result($query_cupos);
                $row_cupos = mysqli_fetch_assoc($result_cupos);
                $cupos_disponibles = $row_cupos['cupos'];

                $nuevos_cupos = $cupos_disponibles - 1; // Suponiendo que se resta un cupo por excursión

                // Actualizar el campo cupos en la tabla destinos
                $update_query = mysqli_prepare($conexion, "UPDATE destinos SET cupos = ? WHERE Nombre = ?");
                mysqli_stmt_bind_param($update_query, 'is', $nuevos_cupos, $destino);
                $ejecutar_update = mysqli_stmt_execute($update_query);


                if ($ejecutar_update) {
                    echo "El campo cupos en la tabla destinos se ha actualizado correctamente.";
                } else {
                    echo "Error al actualizar el campo cupos en la tabla destinos: " . mysqli_error($conexion);
                }
                
                mysqli_stmt_close($query_cupos);
                mysqli_stmt_close($update_query);


        } else {
            echo "Error al realizar la reserva";
        }


    } else {
        echo "No se encontró el destino especificado.";
    }

    // Cerrar las consultas preparadas y la conexión a la base de datos
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($insert_query);
    mysqli_close($conexion);
}
?>
