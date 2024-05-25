<?php
include 'database.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $idReserva = $_POST['id'];
    $destino = $_POST['destino'];
    
    $query = "DELETE FROM carrito WHERE idReserva=?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param('i', $idReserva);

    if ($stmt->execute()) {
                $query_cupos = mysqli_prepare($conexion, "SELECT cupos FROM destinos WHERE Nombre = ?");
                mysqli_stmt_bind_param($query_cupos, 's', $destino);
                mysqli_stmt_execute($query_cupos);
                $result_cupos = mysqli_stmt_get_result($query_cupos);
                $row_cupos = mysqli_fetch_assoc($result_cupos);
                $cupos_disponibles = $row_cupos['cupos'];

                $nuevos_cupos = $cupos_disponibles + 1; 

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


        echo '
        <script>
            alert("Eliminado con éxito!");
            window.location = "../carrito.php";
        </script>
    ';
    } else {
        echo "Error al eliminar el producto: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
